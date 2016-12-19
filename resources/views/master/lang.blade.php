@extends('app')

@section('content')
<h4>Language</h4>
<table>
	<thead>
		<tr>
			<th>Code</th>
			<th>Name Long</th>
			<th>Name Short</th>
		</tr>
		<tbody>
			@foreach($data as $key)
				<tr>
					<td>{{$key->code}}</td>
					<td>{{$key->name_long}}</td>
					<td>{{$key->name_short}}</td>
				</tr>
				@endforeach
		</tbody>
	</thead>
</table>
@endsection