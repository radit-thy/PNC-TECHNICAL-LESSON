<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response(["data"=>$posts,"message"=>"Response is success"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id=$request->id;
        $title=$request->get("title");
        $name=$request->get("name");
        $isposted=Post::create(["title"=>$title,"name"=>$name]);
        if($isposted){
            return response(["data"=>$isposted,"message"=>"Post is successfully"],200);
        }else{
            return response(["data"=>$isposted,"message"=>"Post is not successfully"],500);
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
            return response(["data"=>$post,"message"=>"Post is successfully Updated"],200);
        }catch(Exception $error){
            return response(["data"=>$post,"message"=>"Post is not successfully Updated","error"=>$error],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try{
            $post->delete();
            return response(["data"=>$post,"message"=>"Post is successfully deleted"],200);
        }catch(Exception $error){
            return response(["data"=>$post,"message"=>"Post is not successfully deleted","error"=>$error],500);
            
        }
    }
}
