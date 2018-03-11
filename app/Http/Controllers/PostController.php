<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Image;

class PostController extends Controller
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
        $posts = App\Post::all();
         return view('post.list')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = App\Page::all();
        return view('post.create')->with('pages',$pages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page  = new  App\Post;
        $page->slug= $request->slug;
        $page->page_id=$request->page_id;
        $page->name= $request->name;
        $page->image= $request->image;
        $page->status= $request->status;
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
        return redirect()->route('posts.index');
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
