<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
	public function index(Request $request)
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
		return view('main.index', ['session' => $session]);
	}

	public function send(Request $request)
	{
		if(!empty($request->name) && !empty($request->mobile) && !empty($request->service) && !empty($request->text)) {
			$name = $request->name;
			$mobile = $request->mobile;
			$service = $request->service;
			$text = $request->text;

			Mail::send(['text' => 'main.send'], ['name' => $name, 'mobile' => $mobile, 'service' => $service, 'text' => $text], function($message) {
				$message->to('aleshatechnician@mail.ru', 'Алексей')->subject('Заявка');
				$message->from('aleshatechnician@mail.ru', 'Заявка с сайта:');
			});

			$request->session()->put('successfully', 'Заявка отправлена. В  течении 2  часов  вам перезвонят.');
		} else {
			$request->session()->put('error', 'Произошла ошибка. Заполните все поля или произошла ошибка');
		}
		return redirect('/');
		
	}

}
?>