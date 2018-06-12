<?php

namespace App\Http\Controllers;

use App\Overzicht;
use Illuminate\Http\Request;

class OverzichtController extends Controller
{
    public function index(){
    	return view('pages.overzicht');
    }
}
