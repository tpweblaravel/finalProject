<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //lister les users
    public function index(){
        $liste= User::all();
        return view('admin.users.index', ['users' => $liste]);
       
    }
    //afficher le formulaire d'ajout d'un user
    public function create(){
      
        return view('admin.users.create');

    }
    //enregistrer un user
     public function store(Request $request){
        $user = new User;
        $user->photo= $request->input('img[]');
        $user->nom= $request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->grade=$request->input('grade');
        $user->date_naissance=  $request->input('datenaissance');
        $user->dateR=$request->input('date');
       
        $user->save();
        return redirect('users');
    }
    //modifier une ligne
    public function edit($id){
    	$user =User::find($id);
    	return view('admin.users.edit', ['user'=>$user]);
    }
    public function update(Request $request, $id){
    	$user = User::find($id);
        $user->photo= $request->input('img[]');
        $user->nom= $request->input('nom');
        $user->prenom=$request->input('prenom');
        $user->grade=$request->input('grade');
        $user->date_naissance= $request->input('datenaissance');
        $user->dateR=$request->input('date');
        $user->save();
        return redirect('users');    	
    }
    public function destroy($id){
    	$user= User::find($id);
    	$user->delete();
    	return redirect('users');
    } 
}
