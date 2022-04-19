<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Option;

class ModuleController extends Controller
{
    //lister les modules
    public function index(){
        $listemodule= Module::all();
        return view('admin.modules.index', ['modules' => $listemodule]);
       
    }
    //afficher le formulaire d'ajout d'un module
    public function create(){
        $data = [

            'options' => Option::all(),
        
            ];
        return view('admin.modules.create',$data);

    }
    //enregistrer un module
     public function store(Request $request){
        $module = new Module;
        $module->libelle=$request->input('libelle');
        $module->semestre=$request->input('semestre');
        $module->option_id= $request->input('option');
        $module->controle=$request->input('controle');
        $module->examen=$request->input('examen');
        $module->tp=$request->input('tp');
        $module->save();
        return redirect('modules');
    }
    //modifier une ligne
    public function edit($id){
    	$modu = Module::find($id);
    	return view('admin.modules.edit', ['mod'=>$modu]);
    }
    public function update(Request $request, $id){
        $module =Module::find($id);
        $module->libelle= $request->input('libelle');
        $module->semestre= $request->input('semestre');
        $module->controle= $request->input('controle');
        $module->examen=  $request->input('examen');
        $module->tp=  $request->input('tp');
        $module->save();
        return redirect('modules');   	
    }
    public function destroy(Request $request, $id){
    	$module=Module::find($id);
    	$module->delete();
    	return redirect('modules');
    } 
}
