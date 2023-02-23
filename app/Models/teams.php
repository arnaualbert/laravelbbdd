<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'coach',
        'category',
        'budget'
    ];

    public function players(){
        return $this->hasMany(players::class);
    }
}
