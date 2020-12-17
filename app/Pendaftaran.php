<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
	protected $table = 'pendaftaran';
	protected $fillable = ['nama','tingkatan','email','sekolah','tempat_lahir','tanggal_lahir','jenis_kelamin','warganegara','provinsi','kabupaten','alamat','nama_ayah','nama_ibu','no_hp','alamat_ortu','kip','pkh','pkh','foto','status'];
}
