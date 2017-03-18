<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class dosen_matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari dosen_matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen_matakuliah = new dosen_matakuliah();
    	$dosen_matakuliah->dosen_id="6";
    	$dosen_matakuliah->matakuliah_id="1";
    	$dosen_matakuliah->save();
    	return "Data dosen_matakuliah dengan ID dosen {$dosen_matakuliah->dosen_id} telah berhasil disimpan";
    }
}
