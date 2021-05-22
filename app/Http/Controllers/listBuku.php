<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class listBuku extends Controller
{
    //
    function list_buku(){
        $list_buku = DB::table('list_buku')->get();
        dump($list_buku);
        return view('listbuku',['daftar_buku' => $list_buku]);
    }
}
