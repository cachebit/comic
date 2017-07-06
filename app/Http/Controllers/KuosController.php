<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuosController extends Controller
{
    public function index()
    {
        return view('kuos.index');
    }

    public function show()
    {
        return view('kuos.show');
    }

    public function create()
    {
        return view('kuos.create');
    }
}
