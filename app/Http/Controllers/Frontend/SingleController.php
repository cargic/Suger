<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleController extends Controller
{
    public function index()
    {
        return view('suger.single');
    }
}
