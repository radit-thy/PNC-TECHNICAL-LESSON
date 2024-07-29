<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $books = Book::all();
        return response(["data"=>$books,"message"=>"Response has been successfuly","status"=>200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' =>'required|max:255',
            'author' =>'required|max:255',
            'genre' =>'required|max:255',
            'publisher_year' =>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],500);
        }
        $title=$request->get("title");
        $author=$request->get("author");
        $genre=$request->get("genre");
        $publisher_year=$request->get("publisher_year");
        $isbook_created=Book::create(["title"=>$title,"author"=>$author,"genre"=>$genre,"publisher_year"=>$publisher_year]);
        if($isbook_created){
            return response(["data"=>$isbook_created,"message"=>"book has been create successfuly"],200);
        }else{
            return response(["data"=>$isbook_created,"message"=>"book is not create successfuly"],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book, string $book_id)
    {
        //
        try{
            $book = Book::find($book_id);
            return response(["data"=>$book,"message"=>"book has been show successfully","status"=>200]);
        }catch(Exception $error){
            return response(["data"=>$book,"message"=>"book is not find, It was deleted","error"=>$error],500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book, string $book_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' =>'required|max:255',
            'author' =>'required|max:255',
            'genre' =>'required|max:255',
            'publisher_year' =>'required',
        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],500);
        }
        $book = Book::find($book_id);
        try{
            $book->update(["title"=>$request->get("title"),"author"=>$request->get("author"),"genre"=>$request->get("genre"),"publisher_year"=>$request->get("publisher_year")]);
            return response(["data"=>$book,"message"=>"book has been Updated successfully","status"=>200]);
        }catch(Exception $error){
            return response(["data"=>$book,"message"=>"book is not Updated successfully","error"=>$error],500);
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $books, string $book_id)
    {
        //
        $books = Book::find($book_id);
        try{
            $books->delete();
            return response(["data"=>$books,"message"=>"book has been deleted successfully","status"=>200]);
        }catch(Exception $error){
            return response(["data"=>$books,"message"=>"book is not deleted successfully","error"=>$error],500);
        }
    }
}
