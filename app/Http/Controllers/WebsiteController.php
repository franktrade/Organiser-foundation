<?php

namespace App\Http\Controllers;

use App\Models\Impact;
use App\Models\Testimony;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request)
    {
        return view('website.index', [
            'impacts' => Impact::published()->latest()->take(3)->get(),
            'testimonials' => Testimony::latest()->get(),
        ]);
    }

    public function about(Request $request)
    {
        return view('website.about');
    }

    public function donate(Request $request)
    {
        return view('website.index');
    }

    public function history(Request $request)
    {
        return view('website.index');
    }
}
