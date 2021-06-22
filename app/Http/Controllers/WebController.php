<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Adm;
use App\Models\GoalsGenerates;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Goals;
use App\Models\Vendedor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class WebController extends Controller
{

    public function GoalAddSucess(Request $request){
        Goals::create($request->all());
        return redirect('GoalScreen');
    }


    public function AddSellerSucess(Request $request){

        $nome = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");


        $user = User::create([
            "name"  => $nome,
            "email" => $email,
            "password" => Hash::make($password),
            "type" => 0,
        ]);

        return view('AddSellerSucess');

    }

    public function AddAdmSucess(Request $request){

        $nome = $request->input("name");
        $email1 = $request->input("email");
        $password1 = $request->input("password");


   $administradores = User::create([

        "name"  => $nome,
        "email" => $email1,
        "password" => Hash::make($password1),
        "type" => 1,
        ]);

        return view('AdmAddSucess');
    }
    public function AdmCreate(){
        $administradores =  User::where('type', 1)->get();

        return view('AdmCreate', ["administradores" => $administradores]);
    }

    public function AdmAdd(){
        return view('AdmAdd');
    }

    public function SellerAdd(){
        return view('SellerAdd');
    }


    public function CreateGoalScreen(){
        return view('CreateGoalScreen');
    }

    public function GoalScreen(){
        $metas = Goals::all();
        return view('GoalScreen', ["metas" => $metas]);
    }

    public function Options(){
        return view('Options');
    }

    public function Init(){
        return view('Init');
    }

    public function Start(){
        return view('Start');
    }
    public function UserRegister(Request $request){
        $nome = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");


   $user = User::create([

               "name"  => $nome,
               "email" => $email,
               "password" => $password,
               ]);
    }


    public function HomeMS(){
        return view('HomePage');
    }


    public function user_register(Request $request){

        $email = $request->input("email");
        $password = $request->input("password");
        $type = $request->input("type");
        $name = $request->input("name");

    $user = User::create([
        "password" => $password,
        "email" => $email,
        "name" => $name,
        "type" => $type,
    ]);



    }

    public function update(Request $request, $id){

        $user = User::find($id);
        $user->update($request->all());
        return redirect('AdmCreate');
    }

    public function GoalR(){
        return view('GoalG');
    }
    public function AdmEditScreen($id){
        $user = User::find($id);
        return view('AdmEditScreen', ["user" => $user]);
    }


    public function delete(Request $request, $id){

        $user = User::find($id);
        $user->delete();
        return redirect('AdmCreate');
    }

    public function delete1(Request $request, $id){

        $user = User::find($id);
        $user->delete();
        return redirect('SellerCreate');
    }

    public function SellerGoalScreen(){
        $metas =  Goals::all();
        return view('SellerGoalScreen', ["metas" => $metas]);
    }


    public function SellerCreate(){
        $vendedores =  User::where('type', 0)->get();

        return view('SellerCreate', ["vendedores" => $vendedores]);
    }
    public function Colect(Request $request){
        $id_user = Auth::user()->id;
        $value = $request->input("value");
        $goal_id = $request->input("goal_id");
        $reacheds = GoalsGenerates::create([
            "user_id" => $id_user,
            "goal_id" => $goal_id,
            "value" => $value
        ]);
        return redirect('SellerGoalScreen');
    }
    public function InitSeller(){
        return view('InitSeller');
    }








    public function GoalEditScreen($id){
        $metas = Goals::find($id);

        return view('GoalEditScreen', ["x" => $metas]);

    }


    public function SellerEditScreen($id){
        $user = User::find($id);
        return view('SellerEditScreen', ["user" => $user]);
    }

    public function update1(Request $request, $id){

        $user = User::find($id);
        $user->update($request->all());
        return redirect('SellerCreate');
    }

    public function updategoal(Request $request, $id){

    $metas = Goals::find($id);

    $metas->update($request->all());
    return redirect('GoalScreen');
}















    public function deletegoal(Request $request, $id){

    $metas = Goals::find($id);
    $metas->delete();
    return redirect('GoalScreen');
}




 public function goal_register(Request $request){
    $user_id = $request->input("seller");
    $goal_id = $request->input("goal");
    $value = $request->input("value");

    $goals = GoalsGenerates::create([
        "user_id" => $user_id,
        "goal_id" => $goal_id,
        "value" => $value
        ]);

    }
}
