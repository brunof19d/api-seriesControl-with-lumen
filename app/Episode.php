<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    public $timestamps = false;
    protected $fillable = ['season', 'number_episode', 'watched'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}