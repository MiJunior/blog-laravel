@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
function funcSuccess(){
    $("#successinfo").text("Success").show();
}
$(document).ready(function(){
    $("#successinfo").hide();
    $('#commentForm').on('submit', function(e){
        e.preventDefault();
 
        $.ajax({
            type: 'POST',
            url: '/comment',
            data: $('#commentForm').serialize(),
            success: funcSuccess
        });
    });
});
</script>
@section ('content')
    <div class="container">
        <h1><p><?=$post['name']?></p></h1>
        <h3><p> Content: </p></h3>
        <p><i><?=$post['content']?></i></p>
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
        <?php } ?>
        {{$comments->render()}}
        <hr>
        {!! Form::open(['id' => 'commentForm', 'method' => 'POST']) !!}
            @include('comments._form' ,['name' => 'post_id' , 'id' => $post->id])
        {!! Form::close() !!}
        <div id="successinfo" class="alert alert-success" role="alert"> Status </div>
    </div>
@endsection