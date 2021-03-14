<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $casts = [
        'id' => 'string'
    ];

    protected $fillable = [
        'id', 'log_date', 'title', 'description', 'user_id'
    ];

    public function User() {
        return $this->belongsTo('App\User');
    }
}
