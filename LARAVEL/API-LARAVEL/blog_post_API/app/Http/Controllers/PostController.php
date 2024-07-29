<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
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
        return response()->json(["data"=>$posts,"message"=>"request has been succuessfully"],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ==========================
        // Validator
        // ==========================
        $validator = Validator::make($request->all(), [
            'title' =>'required|max:255',
            'body' =>'required'

        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],500);
        }

        $title = $request->title;
        $body = $request->body;
        $posts = new Post();

        //function try to save data and respone the data
        try{
            $posts->createPost($title,$body);
            return response()->json(["data"=>$posts,"message"=>"This post has been create successfully"],200);

        //use catch to show error and respone the errorn
        }catch(Exception $error){
            return response()->json(["data"=>$posts,"message"=>"Faild to create this post","error"=>$error],500);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $id = $post->id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $id = $post->id;
        $title = $request->title;
        $body = $request->body;

         //function try to save data and respone the data
         try{
            $post->updatePost($id,$title,$body);
            return response()->json(["data"=>$post,"message"=>"This post has been update successfully"],200);

        //use catch to show error and respone the errorn
        }catch(Exception $error){
            return response()->json(["data"=>$post,"message"=>"Faild to update this post","error"=>$error],500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        
        //function try to save data and respone the data
        try{
            $post->save();
            return response()->json(["data"=>$post,"message"=>"This post has been create successfully"],200);

        //use catch to show error and respone the errorn
        }catch(Exception $error){
            return response()->json(["data"=>$post,"message"=>"Faild to create this post","error"=>$error],500);
        }
        $id = $post->id;
        Post::destroy($id);
    }
}
