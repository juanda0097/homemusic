<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Album;
class Homemusic extends Model
{
    protected $fillable = [
        'id', 'name'
    ];
    public function Album(){
        return $this->belongsTo(Album::class);
    }
}
