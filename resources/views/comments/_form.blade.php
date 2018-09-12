        <!-- Name Form input -->
        <div class="form-group">
            {!! Form::label('Name', 'Full Name:') !!}
            {!! Form::text('author', null, ['class'=>'form-control', 'placeholder' => 'George Martin']) !!}
        </div>
        <!--Content Form input -->
        <div class="form-group">
            {!! Form::label('Content', 'Content:') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder' => 'Content']) !!}
        </div>
        <!-- select category -->
        <div class="form-group">
            {!! Form::hidden($name, $id) !!}
        </div>
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}
        </div>