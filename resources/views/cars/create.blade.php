{!! Form::open(array('url' => 'cars', 'method' =>'POST', 'class' => 'form')) !!}

<div class="form-group">
{!! Form::label('Make') !!}
{!! Form::text('make', null, 
    array('required', 
          'class'=>'form-control', 
          'placeholder'=>'Please type in Make')) !!}
</div>

<div class="form-group">
{!! Form::label('Model') !!}
{!! Form::text('model', null, 
    array('required', 
          'class'=>'form-control', 
          'placeholder'=>'Please type in Model')) !!}
</div>

<div class="form-group">
{!! Form::label('Published on') !!}
{!! Form::date('published', null, 
    array('required', 
          'class'=>'form-control', 
          'placeholder'=>'Please type in published date')) !!}
</div>

{!! Form::submit('Create Car') !!}

{!! Form::close() !!}
