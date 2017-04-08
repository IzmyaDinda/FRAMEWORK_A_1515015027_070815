<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;
use App\Pengguna;
class DosenController extends Controller
{
protected $informasi="Gagal melakukan aksi";
public function awal()
    {
    	$semuaDosen = Dosen::all();
    	return view('dosen.awal',compact('semuaDosen'));
    }
public function tambah(){
	return view('dosen.tambah');
}
public function simpan(Requests $input){
	$pengguna = new Pengguna($input->only('username','password'));
	if ($pengguna->save()){
	$dosen = new Dosen();
	$dosen->nama =$input->nama;
	$dosen->nip = $input->nip;
	$dosen->alamat =$input->alamat;
	if ($dosen->dosen()->save($dosen)) 
		$this->informasi='Berhasil Simpan Data';
	}
	return redirect('dosen')->with(['informasi'=>$this->informasi]);
}
public function edit($id){
$dosen=Dosen::find($id);
return view('dosen.edit')->with(array('dosen'=>$dosen));
}
public function lihat($id){
	$dosen=Dosen::find($id);
	return view('dosen.lihat')->with(array('dosen'=>$dosen));
}
public function update($id, Requests $input){
	$dosen=Dosen::find($id);
	$dosen->nama =$input->nama;
	$dosen->nip = $input->nip;
	$dosen->alamat =$input->alamat;
	$dosen->save();
	if (!is_null($input->username)) {
		$pengguna->fill($input->only('username'));
		if (!empty($input->password)) {
			$pengguna->password=$input->password;
		}
	if ($pengguna->save()) {
			$this->informasi='Berhasil simpan data';
		}	
	}
	return redirect('dosen')->with(['informasi'=>$this->informasi]);
}
public function hapus($id){
        $dosen=Dosen::find($id);
        if ($dosen->pengguna()->delete()) {
        	$this->informasi='Berhasil hapus data';
        }
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
    }
}
