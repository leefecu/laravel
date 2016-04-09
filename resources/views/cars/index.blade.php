<h1>Car List</h1>
<a href="cars/create">Create a car</a>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Make</th>
			<th>Model</th>
			<th>Produced</th>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		@foreach($cars as $car)
		<tr>
			<td>{{ $car->id }}</td>
			<td>{{ $car->make }}</td>
			<td>{{ $car->model }}</td>
			<td>{{ $car->produced_on }}</td>
			<td><a href="cars/{{ $car->id }}">View</a></td>
			<td><a href="cars/{{ $car->id }}/edit">Edit</a></td>
			<td>
			{{ Form::open(array('route' => array('cars.destroy', $car->id), 'method' => 'delete')) }}
                <button type="submit" href="{{ URL::route('cars.destroy', $car->id) }}">Delete</button>
            {{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>