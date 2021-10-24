<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        return view('pages.landing.index');
    }

    public function service(){

        return view('pages.landing.service');
    }

    public function integration(){

        return view('pages.landing.integration');
    }

    public function case_study(){

        return view('pages.landing.case-study');
    }

    public function corporate(){

        return view('pages.landing.corporate');
    }

    public function about(){

        return view('pages.landing.about');
    }
}
