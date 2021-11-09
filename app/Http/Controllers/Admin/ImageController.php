<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Setting;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['active_logo','active_favicon', 'destroy']]);
    }
    
    public function index()
    {
        //
        $logos = Image::orderBy('id', 'DESC')->get(); 
        return view('admin.image.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.image.add');
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
        $file = $request->file('image');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $filePath = $request['image']->storeAs('logos',$fileName,'public');
        // $filePath = $request['image']->storeAs('logos', request('image')->getClientOriginalName(),'public');

        Image::create([
            'name'=>$data['title'],
            'image'=>$filePath,
            'status'=>1
        ]);
        Alert()->success('Successfully','Create successfully');
        return redirect()->route('images.index')
                        ->with('success','Image upload successfully');
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
    public function edit()
    {
        //
        return view('admin.image.edit');
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
        $image=Image::find($id);
        unlink('storage/'.$image->image);
        Image::where("id", $image->id)->delete();
        Alert()->success('Successfully','Delete successfully');
        return redirect()->route('images.index')
                        ->with('success','Image deleted successfully');
    }

    public function active_logo($id)
    {
        //
        Setting::where('id', '1')->update(['logo'=>$id]);
        Alert()->success('Successfully','Update successfully');
        return back();
    }
    public function active_favicon($id)
    {
        //
        Setting::where('id', '1')->update(['favicon'=>$id]);
        Alert()->success('Successfully','Update successfully');
        return back();
    }
}
