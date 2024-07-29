<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return response(["data"=>$posts,"message"=>"Response has been successfuly","status"=>200]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $post = Post::create($request->all());
        // return response(["data"=>$post,"message"=>"Response has been successfuly","status"=>200]);

        // $id=$request->id;

        // =========================================================
        //                     validator
        // =========================================================
        $validator = Validator::make($request->all(), [
            'name' =>'required|max:255',
            'email' =>'required|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],500);
        }

        $name=$request->get("name");
        $email=$request->get("email");
        $password=$request->get("password");
        $isposted=Post::create(["name"=>$name,"email"=>$email,"password"=>$password]);
        if($isposted){
            return response(["data"=>$isposted,"message"=>"Post has been create successfuly"],200);
        }else{
            return response(["data"=>$isposted,"message"=>"Post is not create successfuly"],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post, string $id)
    {
        //
        // $post = Post::find($id);
        // return response(["data"=>$post,"message"=>"Response has been successfuly","status"=>200]);

        try{
            $post = Post::find($id);
            return response(["data"=>$post,"message"=>"Post has been show successfully","status"=>200]);
        }catch(Exception $error){
            return response(["data"=>$post,"message"=>"Post is not find, It was deleted","error"=>$error],500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post, string $id)
    {
        //
        // =========================================================
        //                     validator
        // =========================================================
        $validator = Validator::make($request->all(), [
            'name' =>'required|max:255',
            'email' =>'required|max:255',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],500);
        }

        $post = Post::find($id);
        try{
            $post->update(["name"=>$request->get("name"),"email"=>$request->get("email"),"password"=>$request->get("password")]);
            return response(["data"=>$post,"message"=>"Post has been Updated successfully","status"=>200]);
        }catch(Exception $error){
            return response(["data"=>$post,"message"=>"Post is not Updated successfully","error"=>$error],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post, string $id)
    {
        //
        $post = Post::find($id);
        try{
            $post->delete();
            return response(["data"=>$post,"message"=>"Post has been deleted successfully","status"=>200]);
        }catch(Exception $error){
            return response(["data"=>$post,"message"=>"Post is not deleted successfully","error"=>$error],500);
        }

        // $post = Post::find($id);
        // $post->delete();
        // return ["success" => true, "Message" =>"Post deleted successfully"];

    }
}
