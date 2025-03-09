<?php

namespace App\Http\Controllers\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('Contact.contact');
    }

    public function store(Request $request){


       product::create($request->all());

    }
}
