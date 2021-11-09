<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coin;
use Illuminate\Support\Facades\DB;
class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:coin-list|coin-create|coin-edit|coin-delete', ['only' => ['index','store']]);
         $this->middleware('permission:coin-create', ['only' => ['create','store']]);
         $this->middleware('permission:coin-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:coin-delete', ['only' => ['destroy']]);
    } 

    public function index()
    {
        //
        $coins = DB::table('coins')
        ->select('coins.*', DB::raw('COUNT(votes.id_coin) as vote'))
        ->leftJoin('votes', 'coins.id', '=', 'votes.id_coin')
        ->groupBy('coins.id')
        ->orderBy('vote', 'desc')
        ->paginate(20);
        // ->get();
        return view('admin.coin.coin', compact('coins'));
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
        Coin::where('id',$id)->delete();
        Alert()->success('Successfully','Delete successfully');
        return back();
    }

    public function active($id)
    {
        //
        Coin::where('id',$id)->update(['status'=>1]);
        Alert()->success('Successfully','Active successfully');
        return back();
    }
    public function unactive($id)
    {
        //
        Coin::where('id',$id)->update(['status'=>0]);
        Alert()->success('Successfully','Unactive successfully');
        return back();
    }
}
