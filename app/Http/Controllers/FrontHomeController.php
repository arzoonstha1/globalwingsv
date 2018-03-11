<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FrontHomeController extends Controller
{

  
  public function index()
  {
    $pages = App\Page::all();
    
   
   return view('welcome')->with('pages',$pages);
  }
  public function getPage($id)
  {
    $posts = App\Post::where('page_id',$id)->get();
    
    $pages = App\Page::all();
    $page_name = App\Page::where('id',$id)->first();
  
    if($page_name->slug == "home")
    {
      return redirect()->route('welcome');
    }
    else if($page_name->slug == "testimonial")
    {
      return view('front.testimonial')->with('pages',$pages)->with('posts',$posts)->with('name',$page_name->name);
    }
    else if($page_name->slug=="about"){

      return view('front.about')->with('pages',$pages)->with('posts',$posts)->with('name',$page_name->name);
    }
    else if($page_name->slug=="contact"){

      return view('front.contact-us')->with('pages',$pages)->with('posts',$posts)->with('name',$page_name->name);
    }

    else if($page_name->slug=="gallery"){

      $gallerys = App\Gallery::where('category_id',1)->get();
      $categorys = App\Category::all();
      return view('front.gallery')->with('pages',$pages)->with('gallerys',$gallerys)->with('categories',$categorys)->with('posts',$posts)->with('name',$page_name->name);
    }
     else
     {
    return view('front.content')->with('pages',$pages)->with('posts',$posts)->with('name',$page_name->name);
     }
  }

  public function getGallery($id)
  {
    $pages = App\Page::all();
    $gallerys = App\Gallery::where('category_id',$id)->get();
   $categorys = App\Category::all();
   $page_name = "Gallery";
   return view('front.gallery')->with('pages',$pages)->with('gallerys',$gallerys)->with('categories',$categorys)->with('name',$page_name);
  }
   
   
}
