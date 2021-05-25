<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    //
    function UserLogin(Request $req){
        $user_data = $req->input();
        $req->session()->put('user', $user_data['username']);
        return redirect('profile');
    }
}
