<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'yearofbirth',
        'salary',
        'teams_id'
    ];

    public function teams(){
        return $this->belongsTo(teams::class);
    }
}
