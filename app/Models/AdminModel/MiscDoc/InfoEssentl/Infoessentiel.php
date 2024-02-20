<?php

namespace App\Models\AdminModel\MiscDoc\InfoEssentl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminModel\MiscDoc\InfoEssentl\Infoessentielart;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Infoessentiel extends Model
{
    use HasFactory;

    /**
     * Get all of the registred article for the province
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     public function infoEssentielArticles(): HasMany
     {
        return $this->hasMany(Infoessentielart::class, 'infoessentiel_id','id');
     }


     /**
     * Get all of the registred article for the province
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     public function infoEssentielArt(int $val): HasMany
     {
        return $this->hasMany(Infoessentielart::class, 'infoessentiel_id','id')
                     ->where('id', $val);
     }



}
