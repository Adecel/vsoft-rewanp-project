<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function Quote(){
        return view('quote');
    } // end mehtod 
}
