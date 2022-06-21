<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;

class MahasiswaController extends Controller
{
   public function mahasiswa()
    {
        $mahasiswa = mahasiswa::all();
        return view ('mahasiswa',['mahasiswa' =>$mahasiswa ]);
    }
    public function  pencarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = mahasiswa::where('mahasiswa', 'like','%'.$cari.'%');
        return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }
      
    public function editMahasiswa($id)
    {
        return view('editMahasiswa');
    }

    public function deleteMahasiswa($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa -> delete();
        return redirect('/mahasiswa');
    }

    public function tambahData()
    {
    return('tambahData');
    }
}
