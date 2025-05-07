<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {

    
    // $post = Post::find(4)->delete();
    

// $post = Post::find(1);  

        // $post->update(
        //     [
        //     'title' => 'quiero un lada',
        //     'slug' => 'test slug',
        //     'content' => 'amaiga',
        //     'category_id' => 1,
        //     ]

            // para actualizar la base de datos ay que actualizar la web de php XD
        // );

        // Post::create(
        //     [
        //         'title' => 'mejor un volvo',
        //         'slug' => 'test slug',
        //         'content' => 'test content',
        //         'category_id' => 1,
        //         'description' => 'test description',
        //         'posted' => 'not',
        //         'images' => 'test images',
        //         ]
        //     );
           


        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
