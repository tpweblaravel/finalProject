<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class OptionController extends Controller
{
    //lister les options
    public function index(){
        $listeoption= Option::all();
        return view('admin.options.index', ['options' => $listeoption]);
       
    }
    //afficher le formulaire d'ajout d'une Promo
    public function create(){
        return view('admin.options.create');

    }
    //enregistrer une promo
     public function store(Request $request){
        $option = new Option;
        $option->libelle= $request->input('libel');
        $option->niveau=  $request->input('niveauu');
        $option->save();
        return redirect('options');
    }
    //modifier une ligne
    public function edit($id){
    	$opt = Option::find($id);
    	return view('admin.options.edit', ['opt'=>$opt]);
    }
    public function update(Request $request, $id){
    	$option = Option::find($id);
    	$option->libelle = $request->input('libelle');
        $option->niveau=  $request->input('niveauu');
    	$option->save();
    	return redirect('options');    	
    }
    public function destroy($id){
    	$option= Option::find($id);
    	$option->delete();
        return redirect('options');
    } 
}
