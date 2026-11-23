<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function ChiSono()
    {
        return view('me.chi-sono');
    }


    public function Formazione()
    {
        return view('me.formazione');
    }

    public function Progettini()
    {
        return view('me.progettini');
    }
}
