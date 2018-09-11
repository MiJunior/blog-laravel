@extends('layouts.app')

@section('content')
    <div class="container">
    {!! Form::open(['action' => 'PostController@store']) !!}
        @include('posts._form')
    {!! Form::close() !!}
        
    </div>
@endsection