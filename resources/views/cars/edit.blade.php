<h1>Car Edit</h1>

{!! Form::model($car, array('route' => array('cars.update', $car->id), 'method' => 'PUT')) !!}

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
{!! Form::date('produced_on', null, 
    array('required', 
          'class'=>'form-control', 
          'placeholder'=>'Please type in published date')) !!}
</div>

{!! Form::submit('Edit Car!') !!}

{!! Form::close() !!}
