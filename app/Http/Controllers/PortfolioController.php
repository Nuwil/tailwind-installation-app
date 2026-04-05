<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        return view('portfolio.index');
    }

    public function about(): View
    {
        return view('portfolio.about');
    }

    public function projects(): View
    {
        return view('portfolio.projects');
    }

    public function contact(): View
    {
        return view('portfolio.contact');
    }
}
