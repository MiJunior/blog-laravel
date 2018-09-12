@extends('layouts.app')

@section('content')
    <div class="container"> 
    <a href="{{route('post.create')}}" class="btn btn-primary" >Create new post</a>
    <a href="{{route('category.create')}}" class="btn btn-primary" >Create new category</a>
    <h2 align="center">All categories</h2>
    <table class="table" >
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Description</th>
      <th>mod</th>
    </tr>
  </thead>
  
    @foreach ($categories as $category)
    <tbody>
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->desc}}</td>
      <td>
        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('category.destroy', $category->id)}}" method="post">
        <a href="/category/<?=$category->id?>" class="fas fa-eye"></a>
        <a href="/category/{{$category->id}}/edit" class="fas fa-edit" ></a>
               @method('DELETE')
              {{ csrf_field() }}
              <button type="submit" class="btn sm"><i class="fas fa-trash-alt"></i></button>
            </form></td>
    </tr>
    @endforeach

    {!! $categories->render(); !!}
    
    </div>

    
@endsection