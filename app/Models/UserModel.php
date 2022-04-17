<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';

    
    protected $primaryKey = 'id';

    protected $fillable = [
    	'name',
    	'email',
    	'email_verified_at',
        'no_hp',
    	'is_admin',
    	'password',
        'photo_user',
        'remember_token',
        'created_at',
        'updated_at',
    ];

    
}
