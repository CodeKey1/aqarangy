<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertising extends Model
{
    use HasFactory;

    protected $table  = 'advertising';

    protected $fillable = ['id', 'type', 'state' , 'size' , 'price' , 'block_num' , 'address' , 'details' , 'time' , 'user_type' , 'images'  , 'phone' , 'whats_app' , 'user_id' , 'created_at' , 'updated_at'];

    public function users()
    {

        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    
}

