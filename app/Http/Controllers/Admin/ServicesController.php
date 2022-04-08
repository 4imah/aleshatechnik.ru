<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Service;

class ServicesController extends Controller 
{
    public function services($service)
	{
		if($service) {
			$price = Service::where('service', $service)->get();
			$services = $service;
		}	
		return view('admin.price.services', ['price' => $price, 'service' => $services]);
	}

    public function delete($service, $del)
    {
        if($del) {
            $delete = Service::find($del);
            $delete->delete();
            return redirect("/admin/services/$service/");
        }
    }

    public function add(Request $request, $service)
    {
        if(!empty($request->name) && !empty($request->price) && !empty($request->service)) {
            $add = new Service;

            $add->name = $request->name;
            $add->price = $request->price;
            $add->service = $request->service;

            $add->save();
            return redirect("/admin/services/$service/");
        } 
    }

    public function edit(Request $request, $service, $edit)
    {
        if($service && $edit) {
			$price = Service::find($edit);
			$services = $service;

            if(!empty($request->name) && !empty($request->price) && !empty($request->service)) {
                $price->name = $request->name;
                $price->price = $request->price;
                $price->service = $request->service;

                $price->save();

                return redirect("/admin/services/$service/");
            }
		}	
		return view('admin.price.edit', ['price' => $price, 'service' => $services]);
    }
   
}