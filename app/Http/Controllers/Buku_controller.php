<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buku_controller extends Controller
{
    public function index(){
        $title = 'List Buku';
        $data = \DB::table('m_buku')->get();
 
        return view('buku.buku_index',compact('title','data'));
    }
	
	 public function add(){
        $title = 'Tambah Buku';
         
        return view('buku.buku_add',compact('title'));
    }
	
	 public function store(Request $request){
        $judul = $request->judul;
        $keterangan = $request->keterangan;
        $stock = $request->stock;
     
 
        \DB::table('m_buku')->insert([
            
            'judul'=>$judul,
            'keterangan'=>$keterangan,
            'stock'=>$stock,
			'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
		
		
        \Session::flash('sukses','Data buku berhasil di tambah');
 
        return redirect('profile/buku');
    }
	
	public function edit($id){
        $title = 'Edit Buku';
        $dt = \DB::table('m_buku')->where('id',$id)->first();
        
 
        return view('buku.buku_edit',compact('title','dt'));
    }
	
	public function update(Request $request,$id){
        $judul = $request->judul;
        $keterangan = $request->keterangan;
        $stock = $request->stock;
		
		\DB::table('m_buku')->where('id',$id)->update([
			'judul'=>$judul,
            'keterangan'=>$keterangan,
            'stock'=>$stock,
            'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        
             \Session::flash('sukses','Buku berhasil di update');
 
        return redirect('profile/buku');
       
        }
  public function delete($id){
        \DB::table('m_buku')->where('id',$id)->delete();
 
        \Session::flash('sukses','Data buku berhasil dihapus');
        return redirect('profile/buku');
    }
 

 
}

