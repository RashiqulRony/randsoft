<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function about(){
        return view('web.about');
    }

    public function services(){
        return view('web.services');
    }

    public function features(){
        return view('web.features');
    }

    public function portfolios(){
        return view('web.portfolios');
    }

    public function partnership(){
        return view('web.partnership');
    }

    public function contact(){
        return view('web.contact');
    }

}
