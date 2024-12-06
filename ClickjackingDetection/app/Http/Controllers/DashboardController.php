<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // You can pass any data to the view here if needed
        return view('dashboard'); // Replace with the path to your dashboard view
    }
}
