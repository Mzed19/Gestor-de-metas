<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public  $fillable = [
        
        'email',
        'password',
        'name',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ola(){
        return 1;
    }

    public function validPassword($password){
        if (Hash::check($password, $this->password)) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * Generate new token
     *
     * @param int $id
     */
    public static function generateNewToken($id)
    {
        $User =  User::find($id);

        $User->tokens()->delete();

        return $User->createToken('user')->accessToken;
    }
}
