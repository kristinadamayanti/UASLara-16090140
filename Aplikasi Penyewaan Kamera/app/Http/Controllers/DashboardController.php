<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Kamera;

class DashboardController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$kamera = count(Kamera::where('status', '1')->get());
    	$customer = count(Customer::where('status', '1')->get());
    	return view('pages.admin.dashboard', compact('kamera', 'customer'));
    }
}
