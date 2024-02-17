<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function main()
    {
        return view('FrontPage.main');
    }

    public function activity()
    {
        return view('FrontPage.activity');
    }

    public function login()
    {
        return view('FrontPage.login');
    }
}
