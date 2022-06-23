<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        
        $name = "Bianca";
        $years = 25;
        $profissao = "Progamador";
        $arr = [1,2,3,4,5];
        $names = ['Bianca', 'Hellena', 'Milenna', 'jhonatan'];
        return view('welcome',
            [
                'name' => $name, 
                'years' => $years,
                'profissao' => $profissao,
                'arr' => $arr,
                'names' =>$names
            ]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function signin()
    {
        return view('events.signin');
    }

    public function signup()
    {
        return view('events.signup');
    }
}
