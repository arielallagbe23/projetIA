<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function welcome() {
        return view ('welcomeview');
    }
}
