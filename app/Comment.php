<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
        //Table name
    protected $table = 'comments';
    public $primarykey = 'id';

    public function user() {
        return $this->belongsTo('App\User');
    }

    
}
