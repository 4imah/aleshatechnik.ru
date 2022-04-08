@extends('reviews.layouts.review')


@section('session')
{{ $session }}
@endsection


@section('views')
	@foreach($reviews as $review)
		<section id="view">
			<div >				
				<p>Имя: {{ $review->name }}</p>
				<p>Услуга: {{ $review->service }}</p>
				<p>Дата: {{ $review->updated_at }}</p>
				<br>
				<p>Отзыв: {{ $review->text }}</p>
			</div>
			<br><br>
		</section>	
	@endforeach
@endsection

