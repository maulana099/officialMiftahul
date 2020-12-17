<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Gambar;
use App\Message;
use App\Santri;
use DB;
use Illuminate\Support\Facades\Input;

class DataController extends Controller
{
	public function index(){
		$data_santri = DB::table('santri')->get();
		return view ('admin.index',compact('data_santri'));
	}


	public function message(){
		$data_message = DB::table('message')
		->get();
		return view ('admin.message',compact('data_message'));
	}

	public function hapus_message($id){
		$data_message = Message::find($id);
		$data_message->delete();
		return redirect ('/data-message');
	}

	public function daftar(){
		$data_pendaftaran = DB::table('pendaftaran') 
		->get();
		return view ('admin.pendaftaran',compact('data_pendaftaran'));
	}

	public function add_daftar(){
		return view ('admin.add-pendaftaran');
	}

	public function add_pendaftaran(Request $request){
		$request->validate([
			'nama' => 'required',
			'tingkatan' => 'required',
			'email' => 'required',
			'sekolah' => 'required',
			'tempat_lahir' => 'required',
			'tanggal_lahir' => 'required',
			'jenis_kelamin' => 'required',
			'warganegara' => 'required',
			'provinsi' => 'required',
			'kabupaten' => 'required',
			'alamat' => 'required',
			'nama_ayah' => 'required',
			'nama_ibu' => 'required',
			'no_hp' => 'required',
			'alamat_ortu' => 'required',
			'kip' => 'required',
			'pkh' => 'required',
			'foto' => 'required|file|mimes:png,jpeg,jpg|max:3048',
			'status' => 'Calon Santri',
		]);

		$foto = $request->file('foto');
		$new_foto = $foto->getClientOriginalName();
		$foto->move(public_path('foto-santri/'),$new_foto);

		$data_pendaftaran = array(
			'nama' => $request->nama,
			'tingkatan' => $request->tingkatan,
			'email' => $request->email,
			'sekolah' => $request->sekolah,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'jenis_kelamin' => $request->jenis_kelamin,
			'warganegara' => $request->warganegara,
			'provinsi' => $request->provinsi,
			'kabupaten' => $request->kabupaten,
			'alamat' => $request->alamat,
			'nama_ayah' => $request->nama_ayah,
			'nama_ibu' => $request->nama_ibu,
			'no_hp' => $request->no_hp,
			'alamat_ortu' => $request->alamat_ortu,
			'kip' => $request->kip,
			'pkh' => $request->pkh,
			'foto' => $new_foto,
			'status' => 'Calon Santri'
		);

		Pendaftaran::create($data_pendaftaran);
		return redirect ('/data-pendaftaran');
	}

	public function edit_daftar($id){
		$data_pendaftaran = Pendaftaran::where('id',$id)->first();
		return view ('admin.edit-pendaftaran',compact('data_pendaftaran'));
	}

	public function update_daftar(Request $request, $id){
		$param = $request->all();
		$data_pendaftaran = [
			'tingkatan' => $request['tingkatan'],
			'nama' => $request['nama'],
			'email' => $request['email'],
			'sekolah' => $request['sekolah'],
			'tempat_lahir' => $request['tempat_lahir'],
			'tanggal_lahir' => $request['tanggal_lahir'],
			'jenis_kelamin' => $request['jenis_kelamin'],
			'warganegara' => $request['warganegara'],
			'provinsi' => $request['provinsi'],
			'kabupaten' => $request['kabupaten'],
			'alamat' => $request['alamat'],
			'nama_ayah' => $request['nama_ayah'],
			'nama_ibu' => $request['nama_ibu'],
			'no_hp' => $request['no_hp'],
			'alamat_ortu' => $request['alamat_ortu'],
			'kip' => $request['kip'],
			'pkh' => $request['pkh']
		];

		$foto = $request->file('foto');

    // Kalo pas diedit gambar diganti / masukin gambar
		if($foto) {
			$new_foto = $foto->getClientOriginalName();
        $data_pendaftaran['foto'] = $new_foto; // Update field foto
        $foto->move('public/foto-santri/', $new_foto);
    }

    DB::table('pendaftaran')->where('id', $id)->update($data_pendaftaran);
    return redirect ('/data-pendaftaran');
}

public function hapus_daftar($id){
	$data_pendaftaran = Pendaftaran::find($id);
	$data_pendaftaran->delete();
	return redirect ('/data-pendaftaran');
}

public function view_daftar($id){
	$data_pendaftaran = Pendaftaran::find($id);
	return view ('admin.view-pendaftaran',compact('data_pendaftaran'));
}

public function update_status(Request $request, $id){

	$data_pendaftaran = Pendaftaran::where('id', $id)->first();
	$data_pendaftaran->status = $request->status;
	$data_pendaftaran->update();

		// inser ke data santri
	$data_santri = new Santri;
	$data_santri->user_daftar = $data_pendaftaran->id;
	$data_santri->tingkatan = $request->tingkatan;
	$data_santri->nama = $request->nama;
	$data_santri->sekolah = $request->sekolah;
	$data_santri->tempat_lahir = $request->tempat_lahir;
	$data_santri->tanggal_lahir = $request->tanggal_lahir;
	$data_santri->jenis_kelamin = $request->jenis_kelamin;
	$data_santri->alamat = $request->alamat;
	$data_santri->nama_ayah = $request->nama_ayah;
	$data_santri->no_hp = $request->no_hp;
	$data_santri->status = $request->status;
	$data_santri->photo = $request->photo;

    $data_santri->save();
    return redirect ('/data-santri');
}

public function santri(){
	$data_santri = DB::table('santri')->get();
	return view ('admin.santri',compact('data_santri'));
}

public function tambah_santri(){
	return view ('admin.add-santri');
}
public function add_santri(Request $request){
		// dd ($request->all());
	$request->validate([
		'tingkatan' => 'required',
		'nama' => 'required',
		'sekolah' => 'required',
		'tempat_lahir' => 'required',
		'tanggal_lahir' => 'required',
		'jenis_kelamin' => 'required',
		'alamat' => 'required',
		'nama_ayah' => 'required',
		'no_hp' => 'required',
		'status' => 'required',
		'photo' => 'required|file|mimes:png,jpeg,jpg|max:3048',
	]);

	$photo = $request->file('photo');
	$new_photo = $photo->getClientOriginalName();
	$photo->move(public_path('foto-santri/'),$new_photo);

	$data_santri = array(
		'tingkatan' => $request->tingkatan,
		'nama' => $request->nama,
		'sekolah' => $request->sekolah,
		'tempat_lahir' => $request->tempat_lahir,
		'tanggal_lahir' => $request->tanggal_lahir,
		'jenis_kelamin' => $request->jenis_kelamin,
		'alamat' => $request->alamat,
		'nama_ayah' => $request->nama_ayah,
		'no_hp' => $request->no_hp,
		'status' => $request->status,
		'photo' => $new_photo
	);

	Santri::create($data_santri);
	return redirect ('/data-santri');
}

public function edit_santri($id){
	$data_santri = Santri::find($id);
	return view ('admin.edit-santri',compact('data_santri'));
}

public function update_santri(Request $request, $id){
	$param = $request->all();
	$data_santri = [
		'tingkatan' => $request['tingkatan'],
		'nama' => $request['nama'],
		'sekolah' => $request['sekolah'],
		'tempat_lahir' => $request['tempat_lahir'],
		'tanggal_lahir' => $request['tanggal_lahir'],
		'jenis_kelamin' => $request['jenis_kelamin'],
		'alamat' => $request['alamat'],
		'nama_ayah' => $request['nama_ayah'],
		'status' => $request['status'],
		'no_hp' => $request['no_hp']
	];

	$photo = $request->file('photo');

    // Kalo pas diedit gambar diganti / masukin gambar
	if($photo) {
		$new_photo = $photo->getClientOriginalName();
        $data_santri['photo'] = $new_photo; // Update field photo
        $photo->move('public/foto-santri/', $new_photo);
    }

    DB::table('santri')->where('id', $id)->update($data_santri);
    return redirect ('/data-santri');
}

public function hapus_santri($id){
	$data_santri = Santri::find($id);
	$data_santri->delete();
	return redirect ('/data-santri');
}
}
