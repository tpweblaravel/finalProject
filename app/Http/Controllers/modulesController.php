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
        ->join('users', 'modules.users_id', '=', 'users.id')
        ->select('modules.libelle','modules.users_id')
        ->where('users.id', '=', 'modules.users_id')
        ->groupBy('users_id')
        ->get();

        return view('enseigner.module.index', ['module' => $data]);
       
    }
  
   
   
}
