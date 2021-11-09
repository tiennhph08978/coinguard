<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['destroy','active_banner']]);
    }
    public function index()
    {
        //
        $banner_alls=Banner::orderBy('id', 'DESC')->get();
        return view('admin.banner.index', compact('banner_alls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.banner.add');
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
        $this->validate($request, [
            'banner' => 'required',
            'link' => 'required',
        ]);
        $data = $request->all();

        $file = $request->file('banner');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $filePath = $request['banner']->storeAs('banners',$fileName,'public');
        Banner::create([
            'link'=>$data['link'],
            'banner'=>$filePath,
            // 'status'=>1
        ]);
        Alert()->success('Successfully','Create successfully');
        return redirect()->route('banner.index')
                        ->with('success','Banner upload successfully');
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
        $banner = Banner::find($id);
        return view('admin.banner.edit',compact('banner'));
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
        $banner = Banner::find($id);
        $banner->link = $request->input('link');
        $banner->update();
        Alert()->success('Successfully','Update successfully');
        return redirect()->route('banner.index')
                        ->with('success','Role updated successfully');
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
        // Banner::where('id',$id)->delete();
        $banner=Banner::find($id);
        unlink("storage/".$banner->banner);
        Banner::where("id", $banner->id)->delete();
        Alert()->success('Successfully','Delete successfully');
        return redirect()->route('banner.index')
                        ->with('success','Banner deleted successfully');
    }

    public function active_banner($id)
    {
        //
        Setting::where('id', '1')->update(['banner'=>$id]);
        Alert()->success('Successfully','Active successfully');
        return back();
    }
}
