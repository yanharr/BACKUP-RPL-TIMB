<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WisataModel extends Model
{
    protected $table = 'wisatas';

    
    protected $primaryKey = 'id_wisata';

    protected $fillable = [
    	'title',
    	'categorie',
    	'location',
    	'desc',
    	'picture',
        'created_at',
        'updated_at'
    ];
}
