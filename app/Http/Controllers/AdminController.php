<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Etudiant;
class AdminController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listEtudiant = Etudiant::all();
        return view('promotion', ['etu' => $listEtudiant]);
    }
}
