<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Song;
class Medial extends Model
{
    protected $fillable = [
        'id', 'name'
    ];
    public function Song(){
        return $this->belongsToMany(Song::class);
        
    }
}
