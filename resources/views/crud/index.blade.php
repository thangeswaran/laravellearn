@extends('master')
@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Post</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['post']}}</td>
        <td><a href="{{action('CRUDController@edit',$post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><a href="{{action('CRUDController@destroy',$post['id'])}}" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@endsection