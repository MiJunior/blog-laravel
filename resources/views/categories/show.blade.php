@extends('layouts.app')

@section('content')
<div class="container">

    <?php foreach($posts as $post){ ?>
        <div class="card" style="margin-top: 10px; margin-bottom: 5px">
            <div class="card-header" >
                <?=$post['name']?>
            </div>
            <div class="card-body">
                <p class="card-text"><?=$post['content']?></p>
                <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{route('post.destroy', $post->id)}}" method="post">
                 <a href="/post/{{$post->id}}/edit" class="fas fa-edit" ></a>
                @method('DELETE')
                {{ csrf_field() }}
                <button type="submit" class="btn sm"><i class="fas fa-trash-alt"></i></button>
            </form>
            </div>
            </div>
    <?php } ?>
       {{$posts->render()}}
    <hr>
    <?php foreach($comments as $comment){?>
        <div class="card">
            <div class="card-header">
            <?=$comment['author']?>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p><?=$comment['content']?></p>
            <footer class="blockquote-footer">Created at:  <cite title="Created at"><?=$comment['created_at']?></cite></footer>
            </blockquote>
            </div>
        </div>
                <p></p>
    <?php } ?>
    {{$comments->render()}}
    <hr>
    {!! Form::open(['action' => 'CommentController@store']) !!}
        @include('comments._form' ,['name' => 'category_id' , 'id' => $category->id])
    {!! Form::close() !!}
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
    {{$errors->first()}}
    </div>
    @endif
    @if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
</div>
       
@endsection