<?php
   
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
use App\Models\Etudiant;
use App\Models\Promotion;
use App\Models\Option;
use DB;
 
 
class GooglePieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

       $count = array_values(Etudiant::all()->countBy( function ($item){
            return $item['id'];
        })->toArray());

        $optionss = Option::all()
        ->map(function ($option) {
            return $option->libelle;
        });
        //dd(Etudiant::all());
        return view('statistique/piechart')
        ->with('optionss',json_encode($optionss, JSON_NUMERIC_CHECK))
        ->with('count',json_encode($count, JSON_NUMERIC_CHECK));
       
    }
 
}

