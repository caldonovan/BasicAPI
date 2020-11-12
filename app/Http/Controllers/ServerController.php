<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Exception;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Get all records from the server table. Return as JSON.
     */
    public function index()
    {
        try {
            return Server::all();
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    /**
     * Get a single record from the server table. Return as JSON.
     */
    public function show(Server $server)
    {
        try {
            return $server;
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    /**
     * Store a single record using the request data.
     * Return the created server upon success.
     */
    public function store(Request $request)
    {
        try {
            $server = Server::create($request->all());

            return response()->json($server, 201);
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    public function update(Request $request, Server $server)
    {
        try {
            $server->update($request->all());

            return response()->json($server, 201);
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    /**
     * Delete a single record, return JSON response upon success.
     */
    public function delete(Server $server)
    {
        try {
            $server->delete();

            return response()->json(null, 204);
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }
}
