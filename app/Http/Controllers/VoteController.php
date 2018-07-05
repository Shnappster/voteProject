<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteFormRequest;
use App\Vote;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $votes = Vote::orderBy('created_at', 'desc')->get();
        return view('vote.votes', compact('votes'));
    }

    public function create()
    {
        return view('vote.create');
    }

    public function store(VoteFormRequest $request)
    {
        $vote = new Vote([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'file_name' => $request->input('file_name'),
        ]);

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $img->store(Vote::FOLDER);
            $file_name = $img->hashName();
        } else {
            $file_name = 'default.png';
        }

        $vote->file_name = $file_name;
        auth()->user()->publish($vote);

        return redirect('/');
    }

    public function show(Vote $vote)
    {
        return view('vote.show', compact('vote'));
    }

}
