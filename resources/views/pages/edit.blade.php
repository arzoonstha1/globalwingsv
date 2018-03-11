@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">Edit Page</h2>
    @if(session('success'))
    <div class="alert alert-success" role="alert">
  {{session('success')}}
</div>
@endif
<form method="POST" action="{{route('pages.update',$page->id)}}">
{{ method_field('PUT') }}
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Page Name</label>
    <input type="text" class="form-control" name="name" value="{{$page->name}}">
    
  </div>
  <div class="form-group">
    <label>Page Slug</label>
    <input type="text" name="slug" class="form-control" value="{{$page->slug}}">
  </div>
  <input type="submit" class="btn btn-primary" value="UPDATE" name="submit">
</form>
</div>
</div>
@endsection