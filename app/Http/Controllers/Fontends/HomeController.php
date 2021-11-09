<?php

namespace App\Http\Controllers\Fontends;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $today = Carbon::now()->format('Y-m-d');
        $coins = DB::table('coins')
        ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->where('status',1)
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->limit(10)
        ->get();

        $banner = Banner::all();
        return view('font-ends.index', compact('coins','banner'));
    }
    public function coin(){
        $coins = DB::table('coins')
        ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->where('status',1)
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->limit(10)
        ->get();

        return Datatables::of($coins)
            ->addIndexColumn()
            ->addColumn('action', function ($coins) {
                return '<a href="'. route('vote', $coins->id) .'" class="btn btn-success">
                        <span>Vote</span></a>';
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function coin_today(){
        $today = Carbon::today();
        $coin_today = DB::table('coins')
        ->select('coins.*', DB::raw('COUNT(votes.id_coin) as vote'))
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->where([['votes.created_at',$today],['coins.status',1]])
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        // ->limit(10)
        ->get();

        return Datatables::of($coin_today)
            ->addIndexColumn()
            ->addColumn('action', function ($coin_today) {
                return '<a href="'. route('vote', $coin_today->id) .'" class="btn btn-success">
                        <span>Vote</span></a>';
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function coins_all(){
        $coins_all = DB::table('coins')
        ->select('coins.*', DB::raw('COUNT(votes.id_coin) as vote'))
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->where('status',1)
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->get();

        return Datatables::of($coins_all)
            ->addIndexColumn()
            ->addColumn('action', function ($coins_all) {
                return '<a href="'. route('vote', $coins_all->id) .'" class="btn btn-success">
                        <span>Vote</span></a>';
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function coins_new(){
        $current_date = date('Y/m/d');
        $coins_new = DB::table('coins')
        ->select('coins.*', DB::raw('COUNT(votes.id_coin) as vote'))
        ->where([['coins.created_at', $current_date],['status',1]])
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->get();

        return Datatables::of($coins_new)
            ->addIndexColumn()
            ->addColumn('action', function ($coins_new) {
                return '<a href="'. route('vote', $coins_new->id) .'" class="btn btn-success">
                        <span>Vote</span></a>';
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function marketcap(){
        $marketcap = DB::table('coins')
        ->select('coins.*', DB::raw('COUNT(votes.id_coin) as vote'))
        ->whereNull('presale')
        ->where('status',1)
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->get();
        return Datatables::of($marketcap)
            ->addIndexColumn()
            ->addColumn('action', function ($marketcap) {
                return '<a href="'. route('vote', $marketcap->id) .'" class="btn btn-success">
                        <span>Vote</span></a>';
            })
            ->rawColumns(['action'])
            ->make();
    }
    public function presales(){
         $presales = DB::table('coins')
        ->select('coins.*', DB::raw('COUNT(votes.id_coin) as vote'))
        ->where([['presale', 'presale'],['status',1]])
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->get();
        return Datatables::of($presales)
            ->addIndexColumn()
            ->addColumn('action', function ($presales) {
                return '<a href="'. route('vote', $presales->id) .'" class="btn btn-success">
                        <span>Vote</span></a>';
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function detail($id){
        $today = Carbon::today();
        $coin = Coin::findOrFail($id);
        // dd($coin);
        // $vote = Votes::where($id,'=','id_coin')->get();
        $vote = DB::table('votes')->where('id_coin',$id)->get();
        $voteday = DB::table('votes')->where([['id_coin',$id],['created_at',$today]])->get();
        // dd(count($voteday));

        $watchlist = DB::table('watchlists')
        ->select(DB::raw('COUNT(id_user) as followers'))
        ->where('id_coin', $id)
        ->first();

        if(Auth::user()){
            $check = DB::table('watchlists')
            ->where('id_coin', $id)
            ->where('id_user', Auth::user()->id)
            ->first();
        } else{
            $check = null;
        }
        

        $coins = DB::table('coins')
        ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->limit(10)
        ->get();
        return view('font-ends.detail', compact('coin','coins','vote','voteday','watchlist','check'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
