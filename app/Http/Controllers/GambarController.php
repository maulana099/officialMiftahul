<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Gambar;
use App\Dokumentasi;
use App\Berita;

class GambarController extends Controller
{
    public function dokumentasi(){
		$data_dokumentasi = DB::table('dokumentasi')
		->get();
		return view ('admin.dokumentasi',compact('data_dokumentasi'));
	}

	public function add_dokumentasi(Request $request){
		$gambar=array();
		if($files=$request->file('gambar')){
			foreach($files as $file){
				$new_gambar=$file->getClientOriginalName();
				$file->move('public/dokumentasi/',$new_gambar);
				$gambar[]=$new_gambar;
				/*Insert your data*/
				DB::table('dokumentasi')->insert([
					'gambar' => $new_gambar,
				]);
				/*Insert your data*/
			}
		}
		return redirect ('/data-dokumentasi');
	}

	public function edit_dok($id){
		$data_dokumentasi = Dokumentasi::find($id);
		return view ('admin.edit-dokumentasi',compact('data_dokumentasi'));
	}

	public function update_dok(Request $request, $id){
		$new_gambar = $request->hidden_gambar;
		$gambar = $request->file('gambar');
		if ($gambar !='') 
		{
			$request->validate([
				'gambar' => 'required|file|mimes:png,jpeg,jpg|max:100040',
			]);

			$new_gambar = $gambar->getClientOriginalName();
			$gambar->move(public_path('dokumentasi/'),$new_gambar);
		}

		$data_dokumentasi = array(
			'gambar' => $new_gambar,
		);

		Dokumentasi::whereId($id)->update($data_dokumentasi);
		return redirect ('/data-dokumentasi');
	}

	public function hapus_dok($id){
		$data_dokumentasi = Dokumentasi::find($id);
		$data_dokumentasi->delete();
		return redirect ('/data-dokumentasi');
	}

// ----------------------Gambar
	public function gambar(){
		$data_gambar = DB::table('gambar')
		->get();
		return view ('admin.gambar',compact('data_gambar'));
	}

	public function add_gambar(Request $request){
		$request->validate([
			'picture' => 'required|file|mimes:png,jpeg,jpg|max:3048',
		]);

		$picture = $request->file('picture');
		$new_picture = $picture->getClientOriginalName();
		$picture->move(public_path('dokumentasi/'),$new_picture);

		$data_gambar = array(
			'picture' => $new_picture
		);

		Gambar::create($data_gambar);
		// Alert()->success('data berhasil', 'tersimpan');
		return redirect ('/gambar');
	}

	public function edit_gambar($id){
		$data_gambar = Gambar::find($id);
		return view ('admin.edit-gambar',compact('data_gambar'));
	}

	public function update_gambar(Request $request, $id){
		$new_picture = $request->hidden_picture;
		$picture = $request->file('picture');
		if ($picture !='') 
		{
			$request->validate([
				'picture' => 'required|file|mimes:png,jpeg,jpg|max:100040',
			]);

			$new_picture = $picture->getClientOriginalName();
			$picture->move(public_path('dokumentasi/'),$new_picture);
		}

		$data_gambar = array(
			'picture' => $new_picture,
		);

		Gambar::whereId($id)->update($data_gambar);
		return redirect ('/gambar');
	}

	public function berita(){
		$data_berita = DB::table('berita')->get();
		return view ('admin.berita',compact('data_berita'));
	}

	public function add_berita(){
		return view ('admin.add-berita');
	}

	public function tambah_berita(Request $request){
		$request->validate([
			'judul' => 'required',
			'nama' => 'required',
			'tanggal' => 'required',
			'deskripsi1' => 'required',
			'foto_berita' => 'required|file|mimes:png,jpeg,jpg|max:3048',
		]);

		$foto_berita = $request->file('foto_berita');
		$new_foto_berita = $foto_berita->getClientOriginalName();
		$foto_berita->move(public_path('dokumentasi/'),$new_foto_berita);

		$data_berita = array(
			'judul' => $request->judul,
			'nama' => $request->nama,
			'tanggal' => $request->tanggal,
			'deskripsi1' => $request->deskripsi1,
			'deskripsi2' => $request->deskripsi2,
			'deskripsi3' => $request->deskripsi3,
			'foto_berita' => $new_foto_berita
		);

		Berita::create($data_berita);
		// Alert()->success('data berhasil', 'tersimpan');
		return redirect ('/berita-acara');
	}

	public function edit_berita($id){
		$data_berita = Berita::find($id);
		return view ('admin.edit-berita',compact('data_berita'));
	}

	public function update_berita(Request $request, $id){
		$param = $request->all();
		$data_berita = [
			'nama' => $request['nama'],
			'judul' => $request['judul'],
			'tanggal' => $request['tanggal'],
			'deskripsi1' => $request['deskripsi1'],
			'deskripsi2' => $request['deskripsi2'],
			'deskripsi3' => $request['deskripsi3']
		];

		$foto_berita = $request->file('foto_berita');

    // Kalo pas diedit gambar diganti / masukin gambar
		if($foto_berita) {
			$new_foto_berita = $foto_berita->getClientOriginalName();
        $data_berita['foto_berita'] = $new_foto_berita; // Update field photo
        $foto_berita->move('public/dokumentasi/', $new_foto_berita);
    }

    DB::table('berita')->where('id', $id)->update($data_berita);
    return redirect ('/berita-acara');
	}

	public function hapus_berita($id){
		$data_berita = Berita::find($id);
		$data_berita->delete();
		return redirect ('/berita-acara');
	}
}
