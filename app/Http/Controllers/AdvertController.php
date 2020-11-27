<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function index()
    {
        return Advert::all();
    }

    public function show(Advert $advert)
    {
        return Advert::find($advert->id);
    }

    public function store(Request $request)
    {
        $advert = Advert::create($request->all());

        return response()->json($advert, 201);
    }

    public function update(Request $request, Advert $advert)
    {
        $advert->update($request->all());

        return response()->json($advert->id . ' updated!', 200);
    }

    public function delete(Advert $advert)
    {
        $advert->delete();

        return response()->json($advert->id . ' deleted!', 204);
    }
}
