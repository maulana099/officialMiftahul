<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsbController extends Controller
{
    public function index(){
    	return view('psb.index');
    }

    public function pembayaran(){
    	return view('psb.pembayaran');
    }

    public function syarat(){
    	return view('psb.syarat');
    }

    public function caraPendaftaran(){
    	return view ('psb.cara-pendaftaran');
    }
}
