<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Model\user_word;

class user_language extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','user_id'
    ];

  

    public function words(){
        return $this->hasMany('App\user_word');
    }
}
