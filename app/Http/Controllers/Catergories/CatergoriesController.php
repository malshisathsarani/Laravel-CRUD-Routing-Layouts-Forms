<?php

namespace App\Http\Controllers\Catergories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatergoriesController extends Controller
{
    public function catergories(){
        return view('Catergories.catergories');
    }
}
