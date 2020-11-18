<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function show(Company $company)
    {
        return Company::findOrFail($company->id);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());

        return response()->json([
            "status" => "success",
            "message" => "Successfully created new Company!",
            "details" => $company,
        ], 200);
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->all());

        return response()->json([
            "status" => "success",
            "message" => "Successfully updated Company with ID: " . $company->id,
            "details" => $company,
        ], 200);
    }

    public function delete(Company $company)
    {
        $company->delete();

        return response()->json('Company deleted', 204);
    }
}
