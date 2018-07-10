<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Vote $vote)
    {
        $vote->addAnswer();
    }
}
