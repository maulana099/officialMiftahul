<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    protected $fillable = ['nama','alamat','jenis_kelamin','umur','tempat_lahir','tanggal_lahir','persyaratan','user_id'];
}
