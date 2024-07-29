<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    // =============================================
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    //=======================================
    //Function Create user//
    //=======================================
    function createUser($name,$email,$password){
        $users = new User();
        $users->name = $name;
        $users->body = $email;
        $users->password = $password;
        try{
            $users->save();
            return $users;
        }catch(Exception $error){
            return $error;
        }
        
    }

    //=======================================
    //Function Update User//
    //=======================================
    function updateUser($id,$name,$email,$password){
        $users = User::find($id);
        $users->name = $name;
        $users->email = $email;
        $users->password = $password;
        try{
            $users->save();
            return $users;
        }catch(Exception $error){
            return $error;
        }
    }

    public function post():HasMany{
        return $this->hasMany(Post::class);
    }



}
