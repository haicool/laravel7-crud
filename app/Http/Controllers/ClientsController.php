<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|min:3',
            'email' => 'required|unique:clients,email|email',
            'credit'=>'required|min:0'
        ]);

        $client = new Client([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'credit' => $request->get('credit'),
            'mobile' => $request->get('mobile'),
            'address' => $request->get('address'),
        ]);
        $client->save();
        return redirect('/clients')->with('success', 'Client saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name'=>'required|string|min:3',
            'email' => 'required|unique:clients,email|email',
            'credit'=>'required|min:0'
        ]);

        $client->name = $request->get('name');
        $client->email = $request->get('email');
        $client->credit = $request->get('credit');
        $client->mobile = $request->get('mobile');
        $client->address = $request->get('address');
        $client->update();
        return redirect('/clients')->with('success', 'Client Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/clients')->with('success', 'Client deleted successfully');
    }
}
