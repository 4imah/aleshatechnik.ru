@extends('price.layout.articlePage')

@section('services')
{{ $service }}
@endsection


@section('session')
{{ $session }}
@endsection

@section('price')
	@foreach($price as $value)
		<tr>
			<td>{{$value->name}}</td>
			<td>{{$value->price}}</td>
		</tr>
	@endforeach
@endsection