<?php
   
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
use App\Models\Etudiant;
use App\Models\Promotion;
use App\Models\Option;
use App\Models\User;
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
       $option=Option::all();
       $count=[];
       $libelle=[];
       foreach($option as $opt){
       $count[]= Etudiant::join('promotions', 'promotions.id', '=', 'etudiants.promotion_id')
        ->where('option_id',$opt->id)->count();
        $libelle[]=$opt->libelle
        ;} 
       

   
      $currentYear = date("Y");

   $year=[ $currentYear => $currentYear,

    ($currentYear - 1) => $currentYear - 1,
    ($currentYear - 2) => $currentYear - 2,
    ($currentYear - 3) => $currentYear - 3,
    ($currentYear - 4) => $currentYear - 4,

    ];
        $nbr=[];
        $nbre=[];

        foreach($year as $y){
            $nbr[]=Etudiant::where(DB::raw("DATE_FORMAT(date, '%Y')"),$y)->count();
            $nbre[]=User::where(DB::raw("DATE_FORMAT(dater, '%Y')"),$y)->count()
        ;} 

        return view('statistique/piechart')
        ->with('optionss',json_encode($libelle, JSON_NUMERIC_CHECK))
        ->with('count',json_encode($count, JSON_NUMERIC_CHECK))
        ->with('nbr',json_encode($nbr, JSON_NUMERIC_CHECK))
        ->with('year',json_encode($year, JSON_NUMERIC_CHECK))
        ->with('nbre',json_encode($nbre, JSON_NUMERIC_CHECK));
   
   
 
}
}
