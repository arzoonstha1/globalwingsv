@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">List Post</h2>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Post Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Page</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $page)  
    <tr>
      <th scope="row">{{$page->id}}</th>
      <td>{{$page->name}}</td>
      <td>{{$page->slug}}</td>
      <td>{{$page->page->name}}</td>
      <td>{{strip_tags($page->description)}}</td>
      <td>{{$page->status}}</td>
      <td><a href="{{route('pages.edit',$page->id)}}">Edit</a></td>
      <td><a class="nav-link" href="{{route('pages.destroy',$page->id)}}"  onclick="event.preventDefault();
           document.getElementById('delete-page').submit();">
            Delete</a><form id="delete-page" action="{{ route('pages.destroy',$page->id) }}" method="POST" style="display: none;">
        {{method_field('DELETE')}}
            @csrf
      </form>
    </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div>