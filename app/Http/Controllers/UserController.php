<?php

namespace App\Http\Controllers;

use App\Tarif;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $tarif = Tarif::get();
        $users = User::get();
        return view('admin.user.index',compact('users','tarif'));
    }

    public function register()
    {

    }

    public function edit($id)
    {

    }

    public function hapus($id)
    {

    }
}
