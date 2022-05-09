<?php
   
namespace App\Http\Controllers;
 
use App\Models\Etudiant;
 
use Illuminate\Http\Request;
 
Use DB;
 
 
class GooglePieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
          $data['pieChart'] =Etudiant::select(DB::raw("COUNT(*) as count"), DB::raw("promo_id as promo"))
        ->groupBy('promo')
        ->get();
        return view('statistique/piechart');
    }
 
}

