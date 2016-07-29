<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model  {
    
    protected $table = 'gl_group';
 
    // public function articles() {
    //     return $this->hasMany('Article');
    // }
    public $timestamps = false;
}