<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Return all blogs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia::render('blog/index', [
            'blogs' => Blog::with('author')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Search for the blog using the query.
     *
     * @param  int  $query
     * @return \Illuminate\Http\Response
     */
    public function show($query)
    {
        if ($query) {
            // Search for blogs that have a title similar to that query
            // ------------------------------------------------------------------------------------
            $blogs = Blog::where('title', 'LIKE', "%{$query}%")->with('author')->get();

            // Return the filtered blogs
            // ------------------------------------------------------------------------------------
            return response($blogs, 200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
