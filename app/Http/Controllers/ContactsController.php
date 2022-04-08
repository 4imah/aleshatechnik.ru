<?php 
namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
	public function contacts(Request $request)
	{
		$contacts = Contact::all();

		foreach($contacts as $contact)
		{
			$number = $contact->mobile;
			$mail = $contact->mail;
			$yandex = $contact->yandex;
			$profi = $contact->profi;
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
		return view('contacts.contact', ['number' => $number, 'mail' => $mail, 'yandex' => $yandex, 'profi' => $profi, 'session' => $session]);
	}

	public function send(Request $request)
	{
		if(!empty($request->name) && !empty($request->mobile) && !empty($request->service) && !empty($request->text)) {
			$name = $request->name;
			$mobile = $request->mobile;
			$service = $request->service;
			$text = $request->text;

		
		
		Mail::send(['text' => 'contacts.send'], ['name' => $name, 'service' => $service, 'mobile' => $mobile, 'text' => $text], function($message) {
				$message->to('aleshatechnician@mail.ru', 'Алексей')->subject('Заявка');
				$message->from('aleshatechnician@mail.ru', 'Заявка с сайта:');
			});
			$request->session()->put('successfully', 'Заявка отправлена. В  течении 2  часов  вам перезвонят.');
		} else {
			$request->session()->put('error', 'Произошла ошибка. Заполните все поля или произошла ошибка');
		}
		return redirect('/contacts/');
	}
}
?>