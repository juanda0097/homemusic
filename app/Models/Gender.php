<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Song;
class Gender extends Model
{
    protected $fillable = [
        'id', 'name'
    ];
    public function Song(){
        return $this->belongsTo(Song::class);
    }
}
