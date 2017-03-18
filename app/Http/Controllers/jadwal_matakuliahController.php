<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;
class jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari jadwal_matakuliahController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal = new jadwal_matakuliah();
    	$jadwal->mahasiswa_id= '1';
    	$jadwal->ruangan_id= '1';
    	$jadwal->dosen_matakuliah = '3';
    	$jadwal->save();
    	return "Jadwal matakuliah di ruangan {$jadwal->ruangan_id} telah berhasil disimpan";
    }
}
