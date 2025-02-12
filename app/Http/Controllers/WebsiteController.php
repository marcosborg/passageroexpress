<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\FormName;
use App\Models\FormData;
use Illuminate\Support\Facades\Blade;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home');
    }
    
}
