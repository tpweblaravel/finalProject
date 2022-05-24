<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Module;


class modulesController extends Controller
{
    //lister les modules
    public function index(){
        $data = DB::table('modules')
        ->join('users', 'modules.user_id', '=', 'users.id')
        ->select('modules.libelle','modules.user_id')
        ->where('users.id', '=', 'modules.user_id')
        ->groupBy('user_id')
        ->get();
        
        return view('enseignant.notes.modules.index', ['module' => $data]);
      

        
       
    }
  
   
   
}
