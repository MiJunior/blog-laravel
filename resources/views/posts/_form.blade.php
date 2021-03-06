        <!-- Name Form input -->
        <div class="form-group">
            {!! Form::label('Name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Name:']) !!}
        </div>
        <!--Content Form input -->
        <div class="form-group">
            {!! Form::label('Content', 'Content:') !!}
            {!! Form::textarea('content', null, ['class'=>'form-control', 'placeholder' => 'Content']) !!}
        </div>
        <!-- select category -->
        <div class="form-group">
            {!! Form::label('Category', 'Select category') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            
        </div>
        <!-- File input -->
        <div class="form-group">
            {!! Form::label('File', 'Choose a file from your computer (maximum size 2mb)') !!}
            {!! Form::file('file') !!}
        </div>
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}
        </div>