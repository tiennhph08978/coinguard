<?php

namespace App\Http\Controllers\Fontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Coin;
// use DB;
use Illuminate\Support\Facades\DB;

class SubmitCoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('font-ends.submit-coin');
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
        $data = $request->all();

        $filePath = $request['image']->storeAs('uploads', request('image')->getClientOriginalName(),'public');

        Coin::create([
            'name' => $data['name'], 
            'network' => $data['network'],
            'symbol'=> $data['symbol'],
            'presale'=> $data['presale'],
            'lauch_date'=> $data['lauch_date'],
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
        return redirect('/');
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
