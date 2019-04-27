<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.homepage');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function facilities() {
        return view('pages.facilities');
    }

    public function activities() {
        return view('pages.activities');
    }

    public function campus_pics() {
        return view('pages.campus_pics');
    }

    public function campus_videos() {
        return view('pages.campus_videos');
    }
}
