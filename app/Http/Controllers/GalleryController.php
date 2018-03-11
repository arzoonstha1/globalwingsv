<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Image;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = App\Gallery::all();
        
         return view('gallery.list')->with('gallerys',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =App\Category::all();
        return view('gallery.create')->with('categories',$categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page  = new  App\Gallery;
        $page->name= $request->name;
        $page->category_id=$request->category_id;
        $page->image= $request->image;
        $page->description= $request->description;
       

        if($request->hasFile('image'))
        {
          $image = $request->image;
          $filename = time().'-'.$image->getClientOriginalName();
          $path = public_path('image/gallery/'.$filename);
          Image::make($image)->resize(500,500)->save($path);
        }
        $page->image= $filename;

        $page->save();
        return redirect()->route('gallerys.index');
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
        $page= App\Gallery::find($id);
        $gallerys =App\SubPage::all();
        return view('gallerys.edit')->with('gallerys',$page)->with('subgallerys',$gallerys);
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
        $page= App\Gallery::find($id);
        $page->slug=$request->slug;
        $page->subpage_id=$request->sub_page;
        $page->description=$request->description;
        $page->save();
        return redirect()->route('gallerys.index');
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
