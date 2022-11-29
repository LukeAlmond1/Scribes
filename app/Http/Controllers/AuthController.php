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
}
