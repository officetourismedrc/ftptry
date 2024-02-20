<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel\ProvinceDoc\Provart;
use App\Models\AdminModel\Province;
use App\Models\AdminModel\Articlecatg;
use Illuminate\Support\Facades\DB;

class MenuProvinceOnglets extends Controller
{
    //

    //province articles onglets links
    public function ProvinceArticleOnglet(Request $request){

        $data1 = Provart::find($request->id);

        $data = DB::table('provinces as p')
        ->join('provarts as pa', 'p.id', '=', 'pa.province_id')
        ->select('p.id as province_id','p.name as province_name','pa.id as province_article_id','pa.title as province_article_name', 'pa.articlecatg_id as province_article_category','pa.adress as province_article_path')
        ->where('pa.articlecatg_id','=', 1)
        ->get();


        //return $request->name;
        return view($data1->adress, ['provinceLien'=>$data]);         
    }

}
