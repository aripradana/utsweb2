<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function beranda()
    {
        return view('index');
    }

    public function about()
    {
        $nama = 'Pecinta Buku!';
        return view('about', ['nama' => $nama]);
    }
}