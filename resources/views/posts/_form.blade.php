<!-- Nickname Form input -->
        <div class="form-group">
            {!! Form::label('Name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Name:']) !!}
        </div>
        <!--ID Form input -->
        <div class="form-group">
            {!! Form::label('Content', 'Content:') !!}
            {!! Form::text('content', null, ['class'=>'form-control', 'placeholder' => 'Content']) !!}
        </div>
        <!-- Ban type Form input -->
        <div class="form-group">
            {!! Form::label('Category', 'Select category') !!}
            <select class="form-control" name="category_id">
            @include('posts.part.categories', ['categories' => $categories])
            </select>
        </div>
        
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Submit', ['class' => 'btn btn-primary form-control'])!!}
        </div>