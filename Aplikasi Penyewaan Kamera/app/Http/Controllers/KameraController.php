<?php

namespace App\Http\Controllers;

use App\Kamera;
use Illuminate\Http\Request;

class KameraController extends Controller
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
        return view('pages.admin.kamera.kamera', compact('kamera'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.kamera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kamera = new Kamera();
        $kamera->nama_kamera = $request->nama;
        $kamera->tipe = $request->tipe;
        $kamera->harga = $request->harga;
        $kamera->foto = $request->file('foto')->store('kamera');
        $kamera->save();

        return redirect()->route('kamera');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function show(Kamera $kamera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kamera = Kamera::find($id);
        return view('pages.admin.kamera.edit', compact('kamera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kamera = Kamera::find($id);
        $kamera->nama_kamera = $request->nama;
        $kamera->tipe = $request->tipe;
        $kamera->harga = $request->harga;
        if ($kamera->foto = $request->file('foto') == '') {
            $kamera->foto = $request->old_foto;
        } else {
            $kamera->foto = $request->file('foto')->store('kamera');
        }
        $kamera->update();

        return redirect()->route('kamera');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamera = Kamera::find($id);
        $kamera->update(['status' => '0']);
        return redirect()->route('kamera');
    }
}
