<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(ClientRequest $request)
    {
        $client = Client::create($request->all());
    }

    public function update(ClientRequest $request, $id)
    {
        $client = Client::find($id);
        $client->fullname = $request->fullname;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->logo = $request->logo;
        $client->email = $request->email;
        $client->is_newsletter = $request->is_newsletter;
        $client->save();
    }

    public function delete($id)
    {
        $client = Client::find($id);
        $client->delete();
    }

}
