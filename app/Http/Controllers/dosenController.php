<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
    public function awal(){
    	return "Hello dari dosenController";
    }
    public function tambah(){
    	return $this->simpan();
    }
    public function simpan(){
    	$dosen = new dosen();
    	$dosen->nama = 'Dinda Izmya Nurpadillah';
    	$dosen->nip = '1515015027';
    	$dosen->alamat = 'Khayangan';
    	$dosen->pengguna_id = '1';
    	$dosen->save();
    	return "Data kepegawaian dengan nama {$dosen->nama} telah disimpan";
    }
}
