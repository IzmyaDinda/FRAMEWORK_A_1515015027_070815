<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal()
    {
    	return "Hello dari mahasiswaController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Dinda Izmya Nurpadillah';
    	$mahasiswa->nim = '1515015027';
    	$mahasiswa->alamat = 'Khayangan';
    	$mahasiswa->pengguna_id = '1';
    	$mahasiswa->save();
    	return "Data mahasiswa dengan nama {$mahasiswa->nama} dan {$mahasiswa->nim} telah berhasil disimpan";
    }
}
