<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $casts = [
        'id' => 'string',
        'clock_in' => 'string',
        'clock_out' => 'string'
    ];

    protected $fillable = [
        'id', 'log_date', 'title', 'description', 'user_id', 'clock_in', 'clock_out'
    ];

    public function User() {
        return $this->belongsTo('App\User');
    }
}
