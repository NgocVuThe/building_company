<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('management.admin_page.admin');
    }

}