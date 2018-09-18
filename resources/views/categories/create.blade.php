@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'CategoryController@store']) !!}
            @include('categories._form')
        {!! Form::close() !!}
    </div>
@endsection