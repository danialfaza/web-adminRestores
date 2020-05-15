<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boking;

class BookingController extends Controller
{
     public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_boking	= \App\Boking::where('nama','LIKE','%' .$request->cari.'%')->get();
    	}else{
    		$data_boking = \App\Boking::all();
    	}

            	
    	return view('Booking.indesx',['data_boking' => $data_boking]);
    }
    

 public function delete($id)
    {
    	$boking = \App\Boking::find($id);
    	$boking->delete();
    	return redirect('/booking')->with('sukses','Data berhasil dihapus');
    }

}