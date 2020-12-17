<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    protected $fillable = ['tingkatan','nama','alamat','jenis_kelamin','sekolah','tempat_lahir','tanggal_lahir','nama_ayah','no_hp','status','photo','user_daftar'];
}
