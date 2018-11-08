<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable= ['title','completed'];

    public function project(){
        return $this->belongsTo(project::class);
    }
}
