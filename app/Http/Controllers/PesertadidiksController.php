<?php

namespace App\Http\Controllers;

use App\Models\Pesertadidik;
use Illuminate\Http\Request;


class PesertadidiksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesertadidik = Pesertadidik::get();
        return view('pesertadidik.index', compact('pesertadidik'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pesertadidik.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesertadidik = new Pesertadidik();
        $pesertadidik->nama_peserta = $request->nama_peserta;
        $pesertadidik->tahun_peseta = $request->tahun_peseta;
        $pesertadidik->save();
        return redirect()->route('Pesertadidik.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $pesertadidik = Pesertadidik::find($id);
        return view('pesertadidik.edit', compact('pesertadidik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $pesertadidik = Pesertadidik::find($id);
        $pesertadidik->nama_peserta = $request->nama_peserta;
        $pesertadidik->tahun_peseta = $request->tahun_peseta;
        $pesertadidik->update();
        return redirect()->route('Pesertadidik.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Pesertadidik::destroy($id);
        return redirect()->route('Pesertadidik.index');
    }
}
