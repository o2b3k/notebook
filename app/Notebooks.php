<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebooks extends Model
{
    protected $fillable=['name'];

    public function notes(){
      return $this->hasMany(Note::class);
    }
}
