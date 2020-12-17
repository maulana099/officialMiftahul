<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gambar;
use DB;
use App\Pendaftaran;
use App\Berita;
use App\Message;

class DashboardController extends Controller
{   
    public function hasil(){
        return view ('user.hasil');
    }

    public function dashboard(){
        $data_gambar = DB::table('gambar')->get();
        $data_galeri = DB::table('dokumentasi')->get();
        $data_berita = DB::table('berita')
        ->orderBy('id', 'DESC')
        ->paginate(3);
    	return view ('user.index',compact('data_gambar','data_galeri','data_berita'));
    }

    public function berita($id){
        $data_berita = Berita::where('id', $id)->first();
        // $data_berita = DB::table('berita')
        // ->get();
        return view ('user.berita',compact('data_berita'));
    }

    public function message(Request $request){
        $data_pesan = new Message;
        $data_pesan->nama = $request->get('nama');
        $data_pesan->email = $request->get('email');
        $data_pesan->subject = $request->get('subject');
        $data_pesan->pesan = $request->get('pesan');
        $data_pesan->save();
        return redirect ('/');
    }

    public function tentang(){
    	return view ('user.tentang');
    }

    public function visi_misi(){
    	return view ('user.visi-misi');
    }

     public function pendaftaran(){
    	return view ('user.pendaftaran');
    }

    public function post_daftar(Request $request){
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
            'status' => 'Calon Santri',
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
            'foto' => $new_foto
        );

        Pendaftaran::create($data_pendaftaran);
        return redirect ('/hasil/pendaftaran');
    }
}
