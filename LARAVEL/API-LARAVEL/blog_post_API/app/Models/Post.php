<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "body",
        "user_id"
    ];


    //=======================================
    //Function Get Post//
    //=======================================
    

    

    //=======================================
    //Function Create Post//
    //=======================================
    function createPost($title,$body){
        $post = new Post();
        $post->title = $title;
        $post->body = $body;
        try{
            $post->save();
            return $post;
        }catch(Exception $error){
            return $error;
        }
        
    }
    //=======================================
    //Function Update Post//
    //=======================================
    function updatePost($id,$title,$body){
        $post = Post::find($id);
        $post->title = $title;
        $post->body = $body;
        try{
            $post->save();
            return $post;
        }catch(Exception $error){
            return $error;
        }
    }
    //=======================================
    //Function delete Post//
    //=======================================

    //=======================================
    //Function delete Post//
    //=======================================



    //==================Relationship=====================
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
  


}

