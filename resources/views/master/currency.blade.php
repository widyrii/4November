@extends('app')

@section('content')
<h4>Currency</h4>
<table>
	<thead>
		<tr>
			<th>Code</th>
			<th>Name</th>
		</tr>
		<tbody>
			@foreach($data as $key)
				<tr>
					<td>{{$key->code}}</td>
					<td>{{$key->name}}</td>
				</tr>
				@endforeach
		</tbody>
	</thead>
</table>
@endsection
