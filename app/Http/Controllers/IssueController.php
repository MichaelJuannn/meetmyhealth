<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Issue;
use Illuminate\Http\Request;


class IssueController extends Controller
{
    public function store(Request $request)
    {
        Issue::create([
            'client_id' => $request->client_id,
            'doctor_id' => $request->doctor,
            'time' => $request->time,
            'issue' => $request->issue
        ]);
        return redirect('/home');
    }
    public function show(Client $client)
    {
        return view('appointment', ['client' => $client]);
    }
    public function dragon(Issue $issue)
    {
        Issue::destroy($issue->id);
        return redirect('/home');
    }
}
