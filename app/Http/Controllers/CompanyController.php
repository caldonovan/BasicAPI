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
        return Company::find($company->id);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required|string|max:72',
            'company_address' => 'required|string|max:150',
            'company_motto' => 'string|max:72'
        ]);

        $company = Company::create($request->all());

        return response()->json('Company ' . $company->company_name . ' created!', 201);
    }

    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'company_name' => 'required|string|max:72',
            'company_address' => 'required|string|max:150',
            'company_motto' => 'string|max:72'
        ]);

        $company->update($request->all());

        return response()->json('Company ' . $company->company_name . ' updated!', 201);
    }

    public function delete(Company $company)
    {
        $company->delete();

        return response()->json('Company ' . $company->id . ' deleted', 204);
    }
}
