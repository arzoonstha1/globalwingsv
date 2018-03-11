@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">Create Gallery</h2>
   
<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter the title for the category">
    
  </div>

  <input type="submit" class="btn btn-primary" value="CREATE" name="submit">
</form>
</div>
</div>
