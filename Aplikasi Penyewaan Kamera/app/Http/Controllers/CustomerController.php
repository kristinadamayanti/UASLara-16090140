<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Kamera;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kamera = Kamera::where('status', '1')->get();
        $customer = Customer::where('status', '1')->get();
        return view('pages.admin.customer.customer', compact('customer', 'kamera'));
    }

    public function konfirmasi($id)
    {
        $customer = Customer::find($id);
        $customer->update(['konfirmasi' => '1']);
        return redirect()->route('customer');
    }

    
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->update(['status' => '0']);
        return redirect()->route('customer');
    }
}
