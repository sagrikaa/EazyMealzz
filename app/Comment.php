<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
        //Table name
<<<<<<< HEAD
    protected $table = 'comments';
    public $primarykey = 'id';

    public function user() {
        return $this->belongsTo('App\User');
    }
=======
        protected $table = 'comments';
        public $primarykey = 'id';
>>>>>>> 3ac4c5ea334ca08bb4a668b148a9e1dfa67ed556
}
