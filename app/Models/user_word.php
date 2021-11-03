<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user_language;
class user_word extends Model
{
    use HasFactory;

    protected $fillable = [
        'word','meaning','language_id'
    ];

    public function language()
    {
        return $this->belongsTo('App\Models\user_language');
    }
}
