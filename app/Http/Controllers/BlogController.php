<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // Get all the blogs
    // --------------------------------------------------------------------------------------------
    public function index() {
        // Inject blogs into view
        // ----------------------------------------------------------------------------------------
        return inertia::render('blog/index', [
            'blogs' => Blog::with('author')->get()
        ]);
    }

    // Search for blogs
    // --------------------------------------------------------------------------------------------
    public function search($query) {
        // If query exists then search blogs
        // ----------------------------------------------------------------------------------------
        if ($query) {
            // Search for blogs that have a title similar to that query
            // ------------------------------------------------------------------------------------
            $blogs = Blog::where('title', 'LIKE', "%{$query}%")->with('author')->get();

            // Return the filtered blogs
            // ------------------------------------------------------------------------------------
            return response($blogs, 200);
        }
    }
}