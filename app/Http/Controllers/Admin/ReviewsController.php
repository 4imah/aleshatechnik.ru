<?php
namespace App\Http\Controllers\Admin;

use App\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
	//Вывести все отзывы
	public function viewReviews(Request $request)
	{

		if($request->has('name') && $request->has('service') && $request->has('text')) {

			$add = new Review;

			$add->name = $request->name;
			$add->service = $request->service;
			$add->text = $request->text;

			$add->save();

			return redirect('/reviews/');
		}	

		$reviews = Review::all();
		return view('admin.reviews.viewReviews', ['reviews' => $reviews]);
	}

	//Удалить Отзыв
	public function deleteReviews($del)
	{
		if($del) {
			$delete = Review::find($del);
			$delete->delete();
			return redirect("/admin/reviews/");
		}
	}

}
?>