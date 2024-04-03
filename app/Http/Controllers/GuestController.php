<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        return view('main.home');
    }

    public function plans_pricing()
    {
        return view('main.plans_pricing');
    }

    public function faq()
    {
        return view('main.faq');
    }

    public function privacy_policy()
    {
        return view('main.privacy_policy');
    }

    public function terms_conditions()
    {
        return view('main.terms_conditions');
    }

    public function risk_warning()
    {
        return view('main.risk_warning');
    }
}
