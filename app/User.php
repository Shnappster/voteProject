<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function publish(Vote $vote)
    {
        $this->votes()->save($vote);
    }

    public function countVote()
    {
        return DB::table('votes')
            ->where('user_id', '=', $this->id)
            ->count();
    }

}
