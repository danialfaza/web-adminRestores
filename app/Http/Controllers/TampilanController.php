<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restoran;
use DB;

class TampilanController extends Controller
{
    public function index(Request $request)
    {
        
    	if($request->has('cari')){
    		$data_novel	= \App\Restoran::where('nama_restoran','LIKE','%' .$request->cari.'%')->get();
    	}else{
    		$data_novel = \App\Restoran::all();
    	}


    	return view('tampilan.index',['data_novel' => $data_novel]);
    }
}
