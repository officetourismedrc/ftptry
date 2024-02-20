<?php

namespace App\Models\AdminModel\MiscDoc\InfoEssentl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AdminModel\MiscDoc\InfoEssentl\Infoessentiel;
use App\Models\AdminModel\MiscDoc\InfoEssentl\InfoessartImg;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Infoessentielart extends Model
{
    use HasFactory;

     /**
     * Get the province that owns the article
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     public function infoEssentiel(): BelongsTo
     {
        return $this->belongsTo(Infoessentiel::class, 'infoessentiel_id');
     }


     /**
     * Get all of the registred images for this articles
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     public function infoEssentielArtImg(): HasMany
     {
        return $this->hasMany(InfoessartImg::class, 'infoessentielart_id','id');
     }

}
