<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisatas';

    
    protected $primaryKey = 'id_wisata';

    protected $fillable = [
    	'title',
    	'categorie',
    	'location',
    	'desc',
        'status',
    	'picture',
        'created_at',
        'updated_at'
    ];

    // use HasFactory;

    // protected $primaryKey = "id_wisata";

    // public function reviews() {
    //     return $this->hasMany(Review::class, 'id_wisata');
    // }
}
