<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;

class ClientController extends Controller
{
    public function check()
    {
        $clients = Client::all();
        return view('checkdata', ['clients' => $clients]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required | email | unique:clients',
            'name' => 'required | min:2 | max:20',
            'birthday' => 'required',
            'password' => 'required'
        ]);
        $validated['password'] = bcrypt($validated['password']);

        Client::create($validated);
        return redirect('/login')->with('success', 'signup berhasil silahkan login');
    }
    public function update(Request $request)
    {
        Client::where('name', $request->name)
            ->update([
                'age' => $request->age,
                'blood_pressure' => $request->blood_pressure,
                'diabetes' => $request->diabetes
            ]);

        return ClientController::home();
    }
    public function show(Client $client)
    {
        return view('detail', ['client' => $client]);
    }
    public function about()
    {
        return view('about');
    }

    public function sign()
    {
        return view('daftar');
    }

    public function home()
    {
        return view('home');
    }

    public function complete()
    {
        return view('inputdata');
    }
}
