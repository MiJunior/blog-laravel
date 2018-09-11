@extends('layouts.app')

@section ('content')
    <div class="container">
        <h1><p><?=$post['name']?></p></h1>
    <h3><p> Content: </p></h2>
    <p><i><?=$post['content']?></i></p>
    </div>
@endsection