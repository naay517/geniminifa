<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // table yang akan digunakan
    public $table = 'gl_account';

    // mengambil data group dari model Group
    // berdasarkan foreign key 'coa_id'
    // public function group() {
    //     return $this->belongsTo('Group');
    // }
    public $timestamps = false;

}