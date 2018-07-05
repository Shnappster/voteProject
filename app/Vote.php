<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Vote extends Model
{
    public const FOLDER = 'public/votes/';

    protected $fillable = [
        'title', 'description', 'file_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $appends = ['file_url'];

    public function getFileUrlAttribute()
    {
        return env('APP_URL') . Storage::url(self::FOLDER . $this->attributes['file_name']);
    }
}
