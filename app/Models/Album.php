<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Model\Homemusic;
use App\Model\Song;

class Album extends Model
{
    protected $fillable = [
        'id', 'name', 'date', 'homemusic_id'
    ];
    public function Homemusic()
    {
        return $this->hasMany(Homemusic::class);

    }
 
    public function Song(){
        return $this->belongsToMany(Song::class);
        
    }
}
