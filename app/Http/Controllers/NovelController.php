<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restoran;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Exports\NovelExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use DB;

class NovelController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_novel	= \App\Restoran::where('nama_restoran','LIKE','%' .$request->cari.'%')->get();
    	}else{
    		$data_novel = \App\Restoran::all();
    	}

            	
    	return view('novel.index',['data_novel' => $data_novel]);
    }

    public function create(Request $request)
    {
        $files = $request->file('gambar');
        $fileName = $request->judul. '-' . $request->thn_terbit . '-'. $files->getClientOriginalName();
        $files->move(public_path("images "), $fileName);

        Restoran::create([
            'nama_restoran'=> $request->nama_restoran,
            'deskripsi'=> $request->deskripsi,
            'alamat'=> $request->alamat,
            'jam_buka'=> $request->jam_buka,
            'telfon'=> $request->telfon,
            'gambar'=> $insert['gambar']="$fileName",
            

        ]);

    	return redirect('/restoran')->with('sukses','Data berhasil ditambahkan');
    	
    }
    public function edit($id)
    {
       
    	$restoran = \App\Restoran::find($id);
    	return view('novel/edit', ['novel'=> $restoran]);
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
    	$restoran = \App\Restoran::find($id);
    	$restoran->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $restoran->gambar = $request->file('gambar')->getClientOriginalName();
            $restoran->save();
        }
    	return redirect('/restoran')->with('sukses','Data berhasil diubah');
    }
    public function delete($id)
    {
    	$restoran = \App\Restoran::find($id);
    	$restoran->delete();
    	return redirect('/restoran')->with('sukses','Data berhasil dihapus');
    }

    public function export_excel()
    {
        return Excel::download(new NovelExport, 'novel.xlsx'); 
    }
}
