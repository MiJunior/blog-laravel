        <!-- Name Form input -->
        <div class="form-group">
            {!! Form::label('Name', 'Full Name:') !!}
            {!! Form::text('author', null, ['id'=> 'author','class'=>'form-control', 'placeholder' => 'George Martin']) !!}
        </div>
        <!--Content Form input -->
        <div class="form-group">
            {!! Form::label('Content', 'Content:') !!}
            {!! Form::textarea('content', null, ['id'=> 'content','class'=>'form-control', 'placeholder' => 'Content']) !!}
        </div>
        <!-- select category -->
        <div class="form-group">
            {!! Form::hidden($name, $id,['id' => 'relationship']) !!}
        </div>
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Submit', ['id'=> 'sendComment', 'class' => 'btn btn-primary form-control'])!!}
        </div>