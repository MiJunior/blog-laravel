@extends('layouts.app')

@section('content')
    <div class="container">
    {!! Form::model($posts, ['method'=>'PUT', 'files' => true, 'action' => ['PostController@update', $posts->id]]) !!}
        @include('posts._form')
    {!! Form::close() !!}
    </div>
@endsection