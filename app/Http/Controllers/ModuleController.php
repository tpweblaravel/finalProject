<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Option;
use App\Models\User;

class ModuleController extends Controller
{
    //lister les modules
    public function index(){
        $listemodule= Module::all();
        return view('admin.modules.index', ['modules' => $listemodule]);
       
    }
    public function ListeModule(){
        $listeM= Module::all();
        return view('enseignant.masterDP', ['listeM' => $listeM]);
       
    }

    //afficher le formulaire d'ajout d'un module
    public function create(){
        $data = [

            'options' => Option::all(),
        
            ];
            $dataa = [

                'users' => User::all(),
            
            ];
        return view('admin.modules.create',$data,$dataa);

    }
    //enregistrer un module
     public function store(Request $request){
        $module = new Module;
        $module->libelle=$request->input('libelle');
        $module->semestre=$request->input('semestre');
        $module->opt_id= $request->input('option');
        $module->controle=$request->input('controle');
        $module->examen=$request->input('examen');
        $module->tp=$request->input('tp');
        $module->user_id=$request->input('enseignant');
        $module->save();
        return redirect('modules');
    }
    //modifier une ligne
    public function edit($id){
       

            $data = Option::all();
        
           

             $dataa = User::all();
            
                
    	$modu = Module::find($id);
    	return view('admin.modules.edit', ['mod'=>$modu,'options'=>$data,'users'=>$dataa]);
    }
    public function update(Request $request, $id){
        $module =Module::find($id);
        $module->libelle= $request->input('libelle');
        $module->semestre= $request->input('semestre');
        $module->controle= $request->input('controle');
        $module->examen=  $request->input('examen');
        $module->tp=$request->input('tp');
        $module->user_id=$request->input('enseignant');
        $module->save();
        return redirect('modules');   	
    }
    public function destroy(Request $request, $id){
    	$module=Module::find($id);
    	$module->delete();
    	return redirect('modules');
    } 
}
