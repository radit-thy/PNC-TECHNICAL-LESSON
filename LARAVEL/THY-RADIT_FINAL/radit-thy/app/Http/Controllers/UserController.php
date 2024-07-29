<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::all();
        return response(["data" => $users, "message" => "Response has been successfuly", "status" => 200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 500);
        }
        $name = $request->get("name");
        $email = $request->get("email");
        $isUser_created = User::create(["name" => $name, "email" => $email]);
        if ($isUser_created) {
            return response(["data" => $isUser_created, "message" => "User has been create successfuly"], 200);
        } else {
            return response(["data" => $isUser_created, "message" => "User is not create successfuly"], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user, string $user_id)
    {
        //
        try {
            $user = User::find($user_id);
            return response(["data" => $user, "message" => "user has been show successfully", "status" => 200]);
        } catch (Exception $error) {
            return response(["data" => $user, "message" => "user is not find, It was deleted", "error" => $error], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, string $user_id)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()], 500);
        }
        $user = User::find($user_id);
        try {
            $user->update(["name" => $request->get("name"), "email" => $request->get("email")]);
            return response(["data" => $user, "message" => "user$user has been Updated successfully", "status" => 200]);
        } catch (Exception $error) {
            return response(["data" => $user, "message" => "user$user is not Updated successfully", "error" => $error], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, string $user_id)
    {
        //
        $user = User::find($user_id);
        try {
            $user->delete();
            return response(["data" => $user, "message" => "user has been deleted successfully", "status" => 200]);
        } catch (Exception $error) {
            return response(["data" => $user, "message" => "user is not deleted successfully", "error" => $error], 500);
        }
    }
}
