@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">Create Page</h2>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif
<form method="POST" action="{{route('pages.store')}}">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Page Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter page name">
    
  </div>
  <div class="form-group">
    <label>Page Slug</label>
    <input type="text" name="slug" class="form-control" placeholder="Enter page slug">
  </div>
  <input type="submit" class="btn btn-primary" value="CREATE" name="submit">
</form>
</div>
</div>
@endsection