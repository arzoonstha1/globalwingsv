@extends('layouts.manage')

@section('content')
</br></br>

<div class="content-wrapper">
<div class="container-fluid">
    <h2 class="text-center">List Page</h2>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pages as $page)  
    <tr>
      <th scope="row">{{$page->id}}</th>
      <td>{{$page->name}}</td>
      <td>{{$page->slug}}</td>
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