<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index() {

        // Fetch all the blogs
        // ----------------------------------------------------------------------------------------
        $blogs = Blog::with('author')->get();

        // dd($blogs[0]);

        // Inject blogs into view
        // ----------------------------------------------------------------------------------------
        return inertia::render('blog/index', [
            'blogs' => $blogs
        ]);
    }
}