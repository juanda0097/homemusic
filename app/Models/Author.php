<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Song;
class Author extends Model
{
    protected $fillable = [
        'id', 'name', 'date', 'nationality', 'sex'
    ];
    public function Song(){
        return $this->belongsToMany(Song::class);
        
    }
}
