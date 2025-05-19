<?php

namespace App\Http\Controllers;

use App\Models\OrganizationSurvey;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $surveys = OrganizationSurvey::withCount('printers')->latest()->paginate(20);
        return view('admin.surveys.index', compact('surveys'));
    }

}
