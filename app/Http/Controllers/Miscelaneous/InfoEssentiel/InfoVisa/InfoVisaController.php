<?php

namespace App\Http\Controllers\Miscelaneous\InfoEssentiel\InfoVisa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdminModel\MiscDoc\InfoEssentl\InfoessartImg;
use App\Models\AdminModel\MiscDoc\InfoEssentl\Infoessentiel;
use App\Models\AdminModel\MiscDoc\InfoEssentl\Infoessentielart;

class InfoVisaController extends Controller
{
    //
     //essentiel info method route
     public function infoVisa(Request $request){

        //fetching data for site menu
            $data = DB::table('provinces as p')
            ->join('provarts as pa', 'p.id', '=', 'pa.province_id')
            ->select('p.id as province_id','p.name as province_name','pa.id as province_article_id','pa.title as province_article_name', 'pa.articlecatg_id as province_article_category','pa.adress as province_article_path')
            ->where('pa.articlecatg_id','=', 1)
            ->get();
        //end fetching data for site menu

        //$data1 = Infoessentiel::find($request->catid);
        $articleObj = Infoessentiel::find($request->catid)->infoEssentielArt($request->id)->get();
        $imgs = $articleObj[0]->infoEssentielArtImg()->get();
        //return $imgs;

        return view($articleObj[0]->adress, ['provinceLien'=>$data, 'images' => $imgs]);
    }
}
