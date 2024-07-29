<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class UserController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json(["data"=>$users,"message"=>"request user has been succuessfully"],200);
    }


       /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $id = $user->id;
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
            'name' =>'required|max:255',
            'email' =>'required|max:255',
            'password' =>'required|max:255'

        ]);
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors()],500);
        };

        $users = new User();
        //function try to save data and respone the data
        try{
            $users=User::create($request->all());
            return response()->json(["data"=>$users,"message"=>"This user has been create successfully"],200);

        //use catch to show error and respone the errorn
        }catch(Exception $error){
            return response()->json(["data"=>$users,"message"=>"Faild to create this user","error"=>$error],500);
        };

    }

        /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $users, string|int $id)
    {

        //================================
        //delete by use this ways
        //================================
        // $users=User::find($id);
        // if($users){
        //     $users->delete();
        //     return response()->json(["data"=>$users,"message"=>"This user has been delete successfully"],200);
        // }else{
        //     return response()->json(["data"=>$users,"message"=>"Faild to delete this user"],500);
        // }



        //================================
        //delete by use this ways
        //================================
        $users=User::find($id);

        // $id = $users->id;
        // $users->destroy($id);

        //function try to save data and respone the data
        try{
            $users->delete();
            return response()->json(["data"=>$users,"message"=>"This users has been delete successfully"],200);

        //use catch to show error and respone the errorn
        }catch(Exception $error){
            return response()->json(["data"=>$users,"message"=>"Faild to delete this user","error"=>$error],500);
        }
 
    }


        /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $id = $user->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

         //function try to save data and respone the data
         try{
            $user->updateUser($id,$name,$email,$password);
            return response()->json(["data"=>$user,"message"=>"This user has been update successfully"],200);

        //use catch to show error and respone the errorn
        }catch(Exception $error){
            return response()->json(["data"=>$user,"message"=>"Faild to update this user","error"=>$error],500);
        }
    }
}
