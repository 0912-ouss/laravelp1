<?php

namespace App\Http\Controllers;

use App\Models\facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cfacture extends Controller
{
    //
    public function getfacture(){
     
       $dt= DB::select('select * from facture'); 
        return view("factures",["dt"=>$dt]); 

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
        ->insert(["numF"=>$r['numf'],"objet"=>$r['objet'],"dateF"=>$r['date'],"client"=>$r['client'],"tauxTva"=>$r['tva'],"prixHt"=>"0","tva"=>"0","prixTtc"=>"0"]);
         return  redirect('allfacture');
         
         
     }
     public function delete($num){
         $f=facture::where("numF",$num);
         if($f){
             $f->delete();
         }
         return redirect("allfacture");
     }
     public function update($num){
        $o=facture::where("numF",$num)->first();
        return view("upfacture",["o"=>$o]);
       
    }

}


