<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotePDFController extends Controller
{
    public function QuotePDF(){
        return view('quotePDF');
    } // end mehtod 
}
