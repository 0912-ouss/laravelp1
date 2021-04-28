<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cfacture extends Controller
{
    //
    public function getfacture(){
     
       // return DB::select('select * from facture');
        return DB::table('facture')
        //->count();
        ->get();
    }
    public function getone($num){
     
        // return DB::select('select * from facture');
         return DB::table('facture')
         ->where('numF',$num)
         ->get();
     }
     public function ajfact(Request $r){
     
        // return DB::select('select * from facture');
        DB::table('facture')
        ->insert(["numF"=>$r['numf'],"objet"=>$r['objet'],"dateF"=>$r['date'],"client"=>$r['client'],"tauxTva"=>$r['tva']]);
         return  redirect('ajfature');
         
         
     }
}


