<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logomarca;
use App\Models\About;

class SiteController extends Controller
{
    // return datas to the view welcome
    public function index(){

        $logomarca = Logomarca::first();
        $about = About::first();
    
        return view('welcome', compact('logomarca','about'));
    }
}
