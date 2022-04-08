<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;



class AdminController extends Controller
{
	public function main()
	{
		return view('admin.main');
	}
	
	
}
?>