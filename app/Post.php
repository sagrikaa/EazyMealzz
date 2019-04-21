<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    public $primarykey = 'id';
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
