<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function Sample()
    {
        return view('sample');
    }
}
