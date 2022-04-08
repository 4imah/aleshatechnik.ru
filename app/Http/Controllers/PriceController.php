<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Service;

class PriceController extends Controller
{
	public function services() {
		return view('price.service');
	}

	public function service(Request $request, $service)
	{
		if($service) {
			$price = Service::where('service', $service)->get();
			$services = $service;
		}	

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

		return view('price.services', ['price' => $price, 'service' => $services, 'session' => $session]);
	}

	public function send(Request $request, $service)
	{
		if(!empty($request->name) && !empty($request->mobile) && !empty($request->service) && !empty($request->text)) {

			$name = $request->name;
			$mobile = $request->mobile;
			$service = $request->service;
			$text = $request->text;		

		Mail::send(['text' => 'price.layout.send'], ['name' => $name, 'service' => $service, 'mobile' => $mobile, 'text' => $text], function($message) {
				$message->to('aleshatechnician@mail.ru', 'Алексей')->subject('Заявка');
				$message->from('aleshatechnician@mail.ru', 'Заявка с сайта:');
			});
			$request->session()->put('successfully', 'Заявка отправлена. В  течении 2  часов  вам перезвонят.');
		} else {
			$request->session()->put('error', 'Произошла ошибка. Проверьте все ли поля заполнены.');
		}
		return redirect("/services/$service/");
	}
}
?>