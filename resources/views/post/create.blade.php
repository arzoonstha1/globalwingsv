@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">Create Post</h2>
   
<form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Post Heading</label>
    <input type="text" class="form-control" name="name" placeholder="Enter the title for the post">
    
  </div>

  <div class="form-group">
     <label for="">Page</label>
     <select name="page_id" id="" class="form-control">
     @foreach ($pages as $page)
      <option value="{{$page->id}}">{{$page->name}}</option>
      

    
     @endforeach
    </select>
     
       
  </div>
  <div class="form-group">
    <label>Post Slug</label>
    <input type="text" name="slug" class="form-control" placeholder="Enter the slug name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    
    <textarea class="ckeditor" cols="20" rows="50" name="description"></textarea>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" name="image">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Status:</label>
    <input type="radio" class="form-control-sm" name="status" value="active" >Active
    <input type="radio" name="status" id="" class="form-control-sm" value="inactive">Inactive

    
  </div>

  <input type="submit" class="btn btn-primary" value="CREATE" name="submit">
</form>
</div>
</div>
