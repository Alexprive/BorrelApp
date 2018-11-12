<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    // Table Name
    protected $table = 'drinks';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
