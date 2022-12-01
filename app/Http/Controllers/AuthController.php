<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function signup() {
        // Render frontend signup view
        // ----------------------------------------------------------------------------------------
        return inertia::render('auth/signup');
    }

    public function login() {
        // Render frontend login view
        // ----------------------------------------------------------------------------------------
        return inertia::render('auth/login');
    }
}
