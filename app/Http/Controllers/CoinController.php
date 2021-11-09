<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Coin;
use App\Models\Votes;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Alert;
use Carbon\Carbon;
use App\Post;
use Intervention\Image\Facades\Image;


class CoinController extends Controller
{
    public function getData()
    {
        $coin = Coin::all();
        return $coin;
    }

    public function today()
    {

        $current_date = date('Y-m-d');

        $coins = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->where('votes.created_at', $current_date)
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->limit(10)
            ->get();

        $coins_all = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->where('votes.created_at', $current_date)
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->get();

        return view('coins.today', compact('coins'), compact('coins_all'));
    }

    public function alltime()
    {
        // $coins = Coin::orderBy('votes', 'desc')
        // ->limit(10)
        // ->get();

        $coins = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->limit(10)
            ->get();

        $coins_all = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->get();

        // dd($coins);

        return view('coins.alltime', compact('coins'), compact('coins_all'));
    }

    public function new()
    {
        $current_date = date('Y/m/d');

        $coins = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->where('coins.created_at', $current_date)
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->limit(10)
            ->get();

        $coins_all = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->where('coins.created_at', $current_date)
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->get();
        // dd($coins);

        return view('coins.new', compact('coins'), compact('coins_all'));
    }

    public function marketcap()
    {
        $coins = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->whereNull('presale')
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->limit(10)
            ->get();

        $coins_all = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->whereNull('presale')
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->get();

        return view('coins.marketcap', compact('coins'), compact('coins_all'));
    }

    public function presales()
    {
        $coins = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->where('presale', 'presale')
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->limit(10)
            ->get();

        $coins_all = DB::table('coins')
            ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
            ->where('presale', 'presale')
            ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
            ->groupBy('coins.id')
            ->orderBy('vote', 'desc')
            ->get();

        return view('coins.presales', compact('coins'), compact('coins_all'));
    }

    public function submit()
    {
        return view('submit');
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = $request->all();

        $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(), 'public');

        // dd($data);

        Coin::create([
            'name' => $data['name'],
            'network' => $data['network'],
            'symbol' => $data['symbol'],
            'presale' => $data['presale'],
            'lauch_date' => $data['lauch_date'],
            'image' => $filePath,
            'contract_address' => $data['contract_address'],
            'description' => $data['description'],
            'custom_chart_link' => $data['custom_chart_link'],
            'custom_swap_link' => $data['custom_swap_link'],
            'website_link' => $data['website_link'],
            'telegram_link' => $data['telegram_link'],
            'twitter_link' => $data['twitter_link'],
            'discord_link' => $data['discord_link']
        ]);
        return redirect('/new');
    }

    public function detail($id)
    {
        $today = Carbon::today();
        $coin = Coin::findOrFail($id);
        // dd($coin);
        // $vote = Votes::where($id,'=','id_coin')->get();
        $vote = DB::table('votes')->where('id_coin', $id)->get();
        $voteday = DB::table('votes')->where([['id_coin', $id], ['created_at', $today]])->get();
        // dd(count($voteday));
        return view('coins.detail', compact('coin', 'vote', 'voteday'));
    }

    public function vote($id, Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $cons = DB::table('votes')
            ->where('id_user', Auth::user()->id)
            ->where('id_coin', $id)
            ->first();

        if (!$cons) {
            Votes::create([
                'id_user' => Auth::user()->id,
                'id_coin' => $id,
            ]);
        } else {
            alert()->error('Message', 'You already voted for this coin');
        }

        return back();
    }

    // search table
    public function search($q)
    {
        $keyword = $q;
        $searchCoin = Coin::select('*')->where('name', 'LIKE', '%' . $keyword . '%')->get();
        return response($searchCoin);
    }
}
