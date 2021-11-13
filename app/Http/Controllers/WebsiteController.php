<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WebsiteController extends Controller
{
    public function index(){
        $year = date('Y');
        return Inertia::render('Website/Index', ['year' => $year]);
    }
}
