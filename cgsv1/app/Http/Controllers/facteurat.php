<?php

namespace App\Http\Controllers;
use App\Models\d_facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class facteurat extends Controller
{
    public function ajouter(Request $r)
    {
        
            DB::table('d_facture')
            ->insert(["numFfk"=>'001',"designation"=>$r['des'],"unite"=>$r['uni'],"qte"=>$r['qte'],
            "prixUnite"=>$r['pu'],"prixTotal"=>$r['pt']]);
            return redirect("Detaillfact");
        
    }
    

    public function supprimer($num)
    {
        
        $dt=DB::table("d_facture")->where("numDF",$num)->delete();
        return redirect("Detaillfact");
    }

    public function GetAll( )
    {
        $dt=DB::select("select * from d_facture");
        return view("Detaillfact",["dt"=>$dt]);
    }

    public function update($r)
    {
       // $d=d_facture::where("numFfk",$r)->first();
        //return "ddddddddd";
       // return redirect("Mod",["d"=>$d]);
    }





}