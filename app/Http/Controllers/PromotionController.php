<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Option;

class PromotionController extends Controller
{
    //lister les promotions
    public function index(){
        $listepromo = Promotion::all();
        return view('admin.promotions.index', ['promotions' => $listepromo]);
       
    }
    //afficher le formulaire d'ajout d'une Promo
    public function create(){
        $data = [

            'options' => Option::all(),
        
            ];
        return view('admin.promotions.create')->with($data);

    }
    //enregistrer une promo
     public function store(Request $request){
        $promotion = new Promotion;
        $promotion->libelle= $request->input('libelle');
        $promotion->option_id= $request->input('option');
        $promotion->annee=$request->input('annee'); $promotion->save();
        return redirect('promotions');
    }
    //modifier une ligne
    public function edit($id){
      
    	$promo = Promotion::find($id);
    	return view('admin.promotions.edit', ['promo'=>$promo]);
    }
    public function update(Request $request, $id){
    	$promotion = Promotion::find($id);
        $promotion->libelle= $request->input('libelle');
        $promotion->option_id= $request->input('option');
        $promotion->annee=   $request->input('annee');
    	$promotion->save();
    	return redirect('promotions');    	
    }
    public function destroy($id){
    	$promotion= Promotion::find($id);
    	$promotion->delete();
        
    	return redirect('promotions');
    } 

   


}
