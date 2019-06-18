<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Gender;
use App\Model\Interpreter;
use App\Model\Medial;
use App\Model\Author;
use App\Model\Album;
class Song extends Model
{
    protected $fillable = [
        'id', 'name', 'duration','gender_id','interpreter_id'
    ];
    public function Album(){
        return $this->belongsToMany(Album::class);
        
    }
    public function Medial(){
        return $this->belongsToMany(Medial::class);
        
    }
    public function Author(){
        return $this->belongsToMany(Author::class);
        
    }
    public function Interpreter()
    {
        return $this->hasMany(Interpreter::class);

    }
    public function Gender()
    {
        return $this->hasMany(Gender::class);

    }

}
