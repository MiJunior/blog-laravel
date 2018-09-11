        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Name category']) !!}
        </div>
        <!--ID Form input -->
        <div class="form-group">
            {!! Form::label('desc', 'Description:') !!}
            {!! Form::text('desc', null, ['class'=>'form-control', 'placeholder' => 'Description']) !!}
        </div>        
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}
        </div>