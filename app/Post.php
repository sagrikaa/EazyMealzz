<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table name
    protected $table = 'posts';
    public $primarykey = 'id';
    public $timestamps = false;
<<<<<<< HEAD

    public function user() {
        return $this->belongsTo('App\User');
    }
=======
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
}
