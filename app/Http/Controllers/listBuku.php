<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listBuku extends Controller
{
    //
    function list_buku(){
        return view('listbuku');
    }
}
