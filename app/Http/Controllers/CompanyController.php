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
}
