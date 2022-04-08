@extends('admin.price.layout.price')

@section('services_name')
{{ $service }}
@endsection


@section('service')
	@foreach($price as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td>{{$value->name}}</td>
			<td>{{$value->price}}</td>
			<td><a href="{{$service}}/{{$value->id}}">Delete</a></td>
			<td><a href="{{$service}}/edite/{{$value->id}}">Edite</a></td>
		</tr>
	@endforeach
@endsection

