<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Song;
class Interpreter extends Model
{
    protected $fillable = [
        'id', 'name', 'nationality'
    ];
    public function Song(){
        return $this->belongsTo(Song::class);
        }
}
