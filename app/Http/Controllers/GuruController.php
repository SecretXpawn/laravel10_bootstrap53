<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;

class GuruController extends Controller
{
    public function index()
    {
        $data = Guru::paginate(10)->fragment('guru');
        return view ('guru.index')->with([
            'guru' => $data
        ]);
    }
    public function store(StoreGuruRequest $request)
    {
       $validate =$request->validated();
       $Guru = new Guru;
       $Guru->id_guru     = $request->id_guru;
       $Guru->nama_Guru   = $request->nama_Guru;
       $Guru->alamat       = $request->alamat;
       $Guru->phone        = $request->phone;
       $Guru->gender       = $request->gender;
       $Guru->save();
       return redirect('guru')->with('msg', 'Add Sukses');

    }

    public function show(Guru $guru, $id_guru)
    {        
        // echo $id_guru;
        $data = $guru->find($id_guru);
        return view('guru.edit')->with([
            'id_guru'      => $id_guru,
            'nama_guru'    => $data->nama_guru,
            'alamat'        => $data->alamat,
            'gender'        => $data->gender,
            'phone'         => $data->phone,            
        ]);
        
    }

    public function update(UpdateGuruRequest $request, Guru $guru, $id_guru)
    {
        $data = $guru->find($id_guru);
        $data->nama_guru   = $request->nama_guru;
        $data->alamat       = $request->alamat;
        $data->phone        = $request->phone;
        $data->gender       = $request->gender;
        $data->save();
        return redirect('guru')->with('msg', 'Edit'. $data->nama_guru.' berhasil');
    }

    public function destroy(Guru $guru, $id_guru)
    {
        $data = $guru->find($id_guru);    
        $data->delete();
        return redirect('guru')->with('msg', 'Hapus'. $data->nama_guru.' berhasil');
    }
}
