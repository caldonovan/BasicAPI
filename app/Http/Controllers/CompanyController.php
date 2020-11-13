<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        try {
            return Company::all();
        } catch (Exception $e) {
            return "Encountered an error: " . $e->getMessage();
        }
    }

    public function show(Company $company)
    {
        try {
            return Company::find($company->id);
        } catch (Exception $e) {
            return "Encountered an error: " . $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            Company::create($request->all());

            return response()->json('New company created!', 200);
        } catch (Exception $e) {
            return "Encountered an error: " . $e->getMessage();
        }
    }

    public function update(Request $request, Company $company)
    {
        try {
            $company->update($request->all());

            return response()->json($company, 200);
        } catch (Exception $e) {
            return "Encountered an error: " . $e->getMessage();
        }
    }

    public function delete(Company $company)
    {
        try {
            $company->delete();

            return response()->json('Company deleted', 204);
        } catch (Exception $e) {
            return "Encountered an error: " . $e->getMessage();
        }
    }
}
