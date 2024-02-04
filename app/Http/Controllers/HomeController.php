<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return redirect()->route('parent.student.payment');

        return view('home');

    }
}
