<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Exception;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json(["data"=>$posts,"message"=>"Respone is success"],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id= $request->id;
        $title= $request->get("title");
        $name= $request->get("name");
        $isposted=Post::create(["title"=>$title,"name"=>$name]);
        if($isposted){
            return response()->json(["title"=>$title,"name"=>$name,"message"=>"post is success"],200);
        }else{
            return response()->json(["message"=>"post is failed"],400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        try{

            $post->update(["title"=>$request->get("title"),"name"=>$request->get("name")]);
            return response()->json(["data"=>$post,"message"=>"post is updated"],200);
        }catch(Exception $error){
            return response()->json(["message"=>"post is not updated","error"=>$error],400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try{
            $post->delete();
            return response()->json(["data"=>$post,"message"=>"post is deleted"],200);
        }catch(Exception $error){
            return response()->json(["message"=>"post is not deleted","error"=>$error],400);
        }
    }
}
