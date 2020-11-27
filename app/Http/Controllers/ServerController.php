<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Get all records from the server table. Return as JSON.
     */
    public function index()
    {
        return Server::all();
    }

    /**
     * Get a single record from the server table. Return as JSON.
     */
    public function show(Server $server)
    {
        return Server::find($server->id);
    }

    /**
     * Store a single record using the request data.
     * Return the created server upon success.
     */
    public function store(Request $request)
    {
        $server = Server::create($request->all());

        return response()->json($server, 201);
    }

    public function update(Request $request, Server $server)
    {
        $server->update($request->all());

        return response()->json($server, 201);
    }

    /**
     * Delete a single record, return JSON response upon success.
     */
    public function delete(Server $server)
    {
        $server->delete();

        return response()->json(null, 204);
    }
}
