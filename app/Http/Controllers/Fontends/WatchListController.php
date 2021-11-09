<?php

namespace App\Http\Controllers\Fontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Watchlist;


class WatchListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $coins = DB::table('coins')
        ->select(array('*', 'coins.id', DB::raw('COUNT(votes.id_coin) as vote')))
        ->leftJoin('watchlists', 'coins.id', 'watchlists.id_coin')
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->where('watchlists.id_user', Auth::user()->id)
        ->groupBy('coins.id')
        ->get();
        
        return view('font-ends.watchlist', compact('coins'));
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
        $cons = DB::table('watchlists')
        ->where('id_user', Auth::user()->id)
        ->where('id_coin', $id)
        ->first();

        if(!$cons){
            Watchlist::create([
                'id_user' => Auth::user()->id,
                'id_coin' => $id,
            ]);
        } else {
            alert()->error('Message','You already add this coin to watchlist');
        }

        return redirect(route('font-ends.watch-list'));
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
        Watchlist::where('id_coin',$id)
        ->where('id_user', Auth::user()->id)
        ->delete();
        Alert()->success('Thành công','Xóa coin thành công');
        return back();
    }
}
