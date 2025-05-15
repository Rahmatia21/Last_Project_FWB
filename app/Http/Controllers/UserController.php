<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camera;

class UserController extends Controller
{
    public function dashboard(){
        $data = Camera::all();

        return view('user/beranda',compact('data'));
    }
}
