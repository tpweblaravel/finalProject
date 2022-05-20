<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Promotion;


class EtudiantController extends Controller
{
     //lister les etudiants
     public function index(){
        $listeetudiant= Etudiant::all();
        return view('admin.etudiants.index', ['etudiants' => $listeetudiant]);
       
    }
    //afficher le formulaire d'ajout d'un etudiant 
    public function create(){
        $data = [

            'promotions' => Promotion::all(),
        
            ];
        return view('admin.etudiants.create',$data);

    }
    //enregistrer un etudiant
     public function store(Request $request){
        $etudiant = new Etudiant;
        $etudiant->photo= $request->input('img[]');
        $etudiant->nom= $request->input('nom');
        $etudiant->prenom=$request->input('prenom');
        $etudiant->promotion_id=$request->input('promotion');
        $etudiant->date= $request->input('date');
        $etudiant->date_naissance=  $request->input('date_de_naissance');
       
        $etudiant->save();
        return redirect('etudiants');
    }
    //modifier une ligne
    public function edit($id){
        $data = [

            'promotions' => Promotion::all(),
        
            ];
    	$etu = Etudiant::find($id);
    	return view('admin.etudiants.edit', ['etu'=>$etu])->with($data);
    }
    public function update(Request $request, $id){
    	$etudiant = Etudiant::find($id);
        $etudiant->photo= $request->input('photo');
       $etudiant->nom= $request->input('nom');
        $etudiant->prenom=$request->input('prenom');
        $etudiant->promotion_id=$request->input('promotion');
        $etudiant->date=  $request->input('date');
        $etudiant->date_naissance=  $request->input('date_de_naissance');
      
    	$etudiant->save();
    	return redirect('etudiants');    	
    }
    public function destroy($id){
    	$etudiant= Etudiant::find($id);
    	$etudiant->delete();
    	return redirect('etudiants');
    } 
}
