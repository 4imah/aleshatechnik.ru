@extends('admin.reviews.layouts.reviews')
@section('views')
		<section id="views">
			<div>
				<table border="1">
					<tr>
						<th>name</th>
						<th>service</th>
						<th>text</th>
						<th>del</th>
					</tr>
	@foreach($reviews as $review) 
					<tr>
						<td>{{ $review->name }}</td>
						<td>{{ $review->service }}</td>
						<td>{{ $review->text }}</td>
						<td><a href="reviews/{{ $review->id }}">del</a></td>
					</tr>
	@endforeach
				</table>
			</div>
		</section>	
@endsection