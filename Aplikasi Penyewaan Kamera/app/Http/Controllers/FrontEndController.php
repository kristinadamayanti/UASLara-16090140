<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kamera;
use App\Customer;

class FrontEndController extends Controller
{
    public function index(){
    	$kamera = kamera::where('status', '1')->paginate(3);
    	return view('pages.user.index', compact('kamera'));
    }

    public function kamera(){
    	$kamera = kamera::where('status', '1')->get();
    	return view('pages.user.kamera', compact('kamera'));
    }

    public function pesan($id)
    {
    	$kamera = kamera::find($id);
    	return view('pages.user.pesan', compact('kamera'));
    }

    public function pesansubmit(Request $request){
    	$customer = new Customer();
    	$customer->nama = $request->nama;
    	$customer->email = $request->email;
    	$customer->alamat = $request->alamat;
    	$customer->nohp = $request->nohp;
    	$customer->id_kamera = $request->id_kamera;
    	$customer->konfirmasi = '0';
    	$customer->save();

    	return redirect()->route('user.index');
    }
}
