<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (auth()->user()->role == 'admin')
    {
        return view('dashboard');
    }
}
}