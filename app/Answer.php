<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = ['id'];

    public function vote()
    {
        return $this->belongsToMany(Vote::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
