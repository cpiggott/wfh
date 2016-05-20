<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

    protected $table = 'statuses';

    protected $fillable = [
        'status',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
