<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function chiSono()
    {
        return view('me.chi-sono');
    }


    public function formazione()
    {
        return view('me.formazione');
    }

    public function progettini()
    {
        return view('me.progettini');
    }
}
