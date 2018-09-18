@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($categories, ['method'=>'PUT', 'action' => ['CategoryController@update', $categories->id]]) !!}
            @include('categories._form')
        {!! Form::close() !!}
    </div>
@endsection