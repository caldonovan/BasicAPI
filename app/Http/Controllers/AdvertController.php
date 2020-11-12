<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Exception;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function index()
    {
        try {
            return Advert::all();
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    public function show(Advert $advert)
    {
        try
        {
            return Advert::find($advert->id);
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try
        {
            $advert = Advert::create($request->all());

            return response()->json($advert, 201);

        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    public function update(Request $request, Advert $advert)
    {
        try {
            $advert->update($request->all());

            return response()->json($advert->id . ' updated!', 200);
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }

    public function delete(Advert $advert)
    {
        try
        {
            $advert->delete();

            return response()->json($advert->id . ' deleted!', 204);
        } catch (Exception $e) {
            return 'We\'ve caught an error!: ' . $e->getMessage();
        }
    }
}
