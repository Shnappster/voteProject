<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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

    public function answer()
    {
        return $this->belongsToMany(Vote::class);
    }

    protected $appends = ['file_url'];

    public function getFileUrlAttribute()
    {
        return env('APP_URL') . Storage::url(self::FOLDER . $this->attributes['file_name']);
    }

    public function addAnswer()
    {
        $user_id = request()->user()->id;
        $this->answer()->create(compact('user_id'));
    }

    public function countPositiveAnswer()
    {
        return DB::table('answer')
            ->where([
                ['vote_id', '=', $this->id],
                ['answer', '=', '1']
            ])->count();
    }

    public function countNegativeAnswer()
    {
        return DB::table('answer')
            ->where([
                ['vote_id', '=', $this->id],
                ['answer', '=', '0']
            ])->count();
    }
}