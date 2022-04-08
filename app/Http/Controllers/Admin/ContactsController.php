<?php 
namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Mail;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
	public function contacts()
	{
		$contacts = Contact::all();

		foreach($contacts as $contact)
		{
			$id = $contact->mobile;
			$number = $contact->mobile;
			$mail = $contact->mail;
			$yandex = $contact->yandex;
			$profi = $contact->profi;
		}
		return view('admin.contacts.contacts', ['number' => $number, 'mail' => $mail, 'yandex' => $yandex, 'profi' => $profi, 'id' => $id]);
	}

	public function edit(Request $request)
    {
			$price = Contact::find(1);
			

            if(!empty($request->mobile) && !empty($request->mail) && !empty($request->profi) && !empty($request->yandex)) {
                $price->mobile = $request->mobile;
                $price->mail = $request->mail;
                $price->profi = $request->profi;
                $price->yandex = $request->yandex;

                $price->save();

                return redirect("/admin/contacts/");
            }
		return view('admin.contacts.contacts', ['price' => $price]);
    }
}
?>