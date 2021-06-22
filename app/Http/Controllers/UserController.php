<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Adm;
use App\Models\GoalsGenerates;
use Illuminate\Http\Request;
use App\Models;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function login(Request $request){

        $email =  $request->input("email");

        $password =  $request->input("password");

        $user = User::where('email', $email)->first();

        if(is_null($user)){
            return Response(["message" => "Email ou senha incorreto"], 400);
        }

        if($user->validPassword($password)){
            return Response(["message" => "Email ou senha incorreto"], 400);
        }

        $token = User::generateNewToken($user->id);

        return Response(["token" => $token], 200);

    }

}

