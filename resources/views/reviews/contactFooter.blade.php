@extends('reviews.layouts.review')

@section('contactFooter')
 {{ $contactFooter->yandex }}

	@foreach($contactFooter as $contactFoot)
	<h4>Связаться со мной</h4>
	<address>
	<a href="{{ $contactFoot->yandex }}">Профиль на Яндекс Услуги</a> <br>
	<a href="{{ $contactFoot->profi }}"> Профиль на Profi.ru</a> 
	</address>
	<address>
		<span>Email :</span> 
		<a href="{{ $contactFoot->mail }}">{{ $contactFoot->mail }}</a> 
	</address>
	<address>
		<span>Телефон :</span> 
		 <br>
		Мой: {{ $contactFoot->mobile }}<br>
	</address>
	@endforeach
@endsection

@var_dump({{$contactFooter}})