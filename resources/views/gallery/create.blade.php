@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">Create Gallery</h2>
   
<form method="POST" action="{{route('gallerys.store')}}" enctype="multipart/form-data">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Gallery Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter the title for the gallery">
    
  </div>

  <div class="form-group">
     <label for="">Caterory</label>
     <select name="category_id" id="" class="form-control">
     @foreach ($categories as $page)
      <option value="{{$page->id}}">{{$page->name}}</option>
      

    
     @endforeach
    </select>
     
       
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    
    <textarea class="ckeditor" cols="20" rows="50" name="description"></textarea>
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" name="image">
    
  </div>

  <input type="submit" class="btn btn-primary" value="CREATE" name="submit">
</form>
</div>
</div>
