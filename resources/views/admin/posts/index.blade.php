@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <h1>Posts</h1>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->slug}}</td>
                    <td>
                      <a href="{{route('admin.posts.show', $post->id)}}">Show</a>
                      <a href="{{route('admin.posts.edit', $post->id)}}">Edit</a>
                    </td>
                </tr>
            @endforeach
    
        </tbody>
      </table>
    </div>
</div>
@endsection