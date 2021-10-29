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

    public function service_addon(){

        return view('pages.landing.service-addon');
    }

    public function service_package(){

        return view('pages.landing.service-package');
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

    public function corporate_csr(){

        return view('pages.landing.corporate-csr');
    }

    public function about(){

        return view('pages.landing.about');
    }
}
