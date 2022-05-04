<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maestro extends Controller
{
    public function maes_ayiti_espo()
    {
        return view('ayiti_espo');
    }

    public function maes_atik()
    {
        return view('atik');
    }
    public function maes_pwogramasyon()
    {
        return view('pwogramasyon');
    }
    public function maes_videyo()
    {
        return view('videyo');
    }
    public function maes_lejand()
    {
        return view('lejand');
    }
    public function maes_kontak()
    {
        return view('kontak');
    }
}
