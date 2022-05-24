<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Note;


class NoteController extends Controller
{
    //lister les notes
    public function index(){
        $data = DB::table('notes')
        ->join('etudiants', 'notes.etudiant_id', '=', 'etudiants.id')
        ->join('modules', 'modules.id', '=', 'notes.module_id')
        ->select('modules.controle','modules.tp','modules.examen','notes.note', 'etudiants.nom', 'etudiants.prenom', 'notes.id')
        ->where('notes.etudiant_id', '=', 'etudiants.id')
        ->get();

        return view('enseignant.notes.index', ['notes' => $data]);
       
    }
    //afficher le formulaire d'ajout d'une note
    public function create(){
        $data = [

            'notes' => notes::all(),
        
            ];
        return view('enseignant.notes.create',$data);

    }
    //enregistrer une note
     public function store(Request $request){
        $Notes = new Note;
        $Notes->controle = $request->input('controle');
        $Notes->tp=$request->input('tp');
        $Notes->examen=$request->input('examen');
        $Notes->module_id= $request->input('modules');
        $Notes->etudiant_id=$request->input('etudiants');
        $Notes->save();
        return redirect('notes');
    }
    //modifier une ligne
    public function edit($id){
    	$NOTE = Note::find($id);
    	return view('enseignant.notes.edit', ['mod'=>$NOTE]);
    }
    public function update(Request $request, $id){
        $Notes =Note::find($id);
        $Notes->note=$request->input('note');
        $Notes->type=$request->input('type');
        $Notes->module_id= $request->input('modules');
        $Notes->etudiant_id=$request->input('etudiants');
        $Notes->save();
        return redirect('notes');   	
    }

   
   
}
