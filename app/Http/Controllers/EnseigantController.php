<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Module;


class EnseigantController extends Controller
{
    //lister les modules
    public function index(){
        $data = DB::table('modules')
        ->join('users', 'modules.user_id', '=', 'users.id')
        ->select('modules.libelle','modules.users_id')
        ->where('users.id', '=', 'modules.user_id')
        ->groupBy('user_id')
        ->get();

        return view('enseignant.modules.index', ['module' => $data]);
       
    }
  
    public function ListeModule(Request $request, $id){
        $listeM= Module::find($id);
        return view('admin.masterdec', ['listeM' => $listeM]);
       
    }
   
}
