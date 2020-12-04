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
        $this->validate($request, [
            'title' => 'required|string|max:100',
            'subtitle' => 'string|max:72',
            'description' => 'required|string|max:172',
            'registration' => 'requred|string|max:8',
            'make' => 'required|string|max:24',
            'model' => 'required|string|max:48',
            'trim' => 'string|max:48',
            'price' => 'required|string|max:6',
            'mileage' => 'required|max:16',
            'engine_size' => 'string|max:16',
            'doors' => 'string|max:1',
            'body_style' => 'string|max:16',
            'transmission' => 'required|string|max:24',
            'fuel_type' => 'required|string|max:8',
        ]);

        $advert = Advert::create($request->all());

        return response()->json($advert, 201);
    }

    public function update(Request $request, Advert $advert)
    {
        $this->validate($request, [
            'title' => 'required|string|max:100',
            'subtitle' => 'string|max:72',
            'description' => 'required|string|max:172',
            'registration' => 'requred|string|max:8',
            'make' => 'required|string|max:24',
            'model' => 'required|string|max:48',
            'trim' => 'string|max:48',
            'price' => 'required|string|max:6',
            'mileage' => 'required|max:16',
            'engine_size' => 'string|max:16',
            'doors' => 'string|max:1',
            'body_style' => 'string|max:16',
            'transmission' => 'required|string|max:24',
            'fuel_type' => 'required|string|max:8',
        ]);

        /**
         * We're only doing this because we
         * have already validated the request
         * above.
         */
        $advert->update($request->all());

        return response()->json($advert->id . ' updated!', 200);
    }

    /**
     * Typically when we would be using authentication,
     * we would want to check the user that is attempting
     * to delete the resource, owns it.
     *
     * In this case, any sort of checking is pointless as
     * we don't have anything to check against, the user could
     * just add whichever user ID is needed.
     */
    public function delete(Advert $advert)
    {
        $advert->delete();

        return response()->json($advert->id . ' deleted!', 204);
    }
}
