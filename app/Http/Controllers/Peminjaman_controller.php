<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class Peminjaman_controller extends Controller
{
    public function store($id){
        \DB::table('peminjaman')->insert([
            'buku'=>$id,
           // 'user'=>\Auth::user()->id,
            'created_at'=>date('Y-m-d H:i:s')
        ]);
 
        return redirect('profile/buku');
    }
}