<?php
namespace App\Http\Controllers;

use App\Review;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
	public function viewReviews(Request $request)
	{
		
			if($request->session()->has('successfully'))
			{
				$session = $request->session()->pull('successfully');
			} else {
				if($request->session()->has('error')) {
					$session = $request->session()->pull('error');
				} else {
					$session = '';
				}
				
			}

		if(!empty($request->name) && !empty($request->service) && !empty($request->text)) {

			$add = new Review;

			$add->name = $request->name;
			$add->service = $request->service;
			$add->text = $request->text;

			$add->save();

			$request->session()->put('successfully', 'Отзыв добавлен');

			return redirect('/reviews/');
		} else {
			if($request->has('submit')) {

				$request->session()->put('error', 'Произошла ошибка. Заполните все поля или произошла ошибка');
			} 
			
		}
		

		
		//Добавить если не пустой то показывать
		$reviews = Review::all();
		return view('reviews.viewReviews', ['reviews' => $reviews, 'session' => $session]);
	}
 /*
	public function contactFooter() {
		$contactFooter = Contact::all();

		return view('reviews.viewReviews', ['contactFooter' => $contactFooter]);
	}
	*/
}
?>