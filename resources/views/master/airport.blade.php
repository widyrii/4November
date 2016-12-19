@extends('app')

@section('content')
<h4>Airport</h4>
<table>
	<thead>
		<tr>
			<th>Airport Name</th>
			<th>Location</th>
			<th>Country</th>
		</tr>
		<tbody>
			@foreach($data as $key)
				<tr>
					<td>{{$key->airport_name}}</td>
					<td>{{$key->location_name}}</td>
					<td>{{$key->country_id}}</td>
				</tr>
				@endforeach
		</tbody>
	</thead>
</table>
@endsection