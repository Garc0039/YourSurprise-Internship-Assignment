<?php

namespace App\Http\Controllers;

use App\Models\likes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userNumber = 8;
        $likedPosts = DB::select("SELECT * FROM `likes` WHERE `user_id` = {$userNumber}");
        $posts = array();
        for($i = 0; $i < count($likedPosts); $i++) {
            $post = DB::select("SELECT * FROM `blog_posts` WHERE `blog_id` = {$likedPosts[$i]->blog_id}");
            $posts[] = $post;
        }
        //echo "<script>console.log('" . json_encode($posts[1][0]->post) . "');</script>";
        return view('likes.index', compact('likedPosts', 'posts', 'userNumber'));
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
    public function show(likes $likes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(likes $likes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, likes $likes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(likes $likes)
    {
        //
    }
}
