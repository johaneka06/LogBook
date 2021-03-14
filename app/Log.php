<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $casts = [
        'id' => 'string'
    ];

    public function User() {
        return $this->belongsTo('App\User');
    }
}
