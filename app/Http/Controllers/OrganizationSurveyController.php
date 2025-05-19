<?php

namespace App\Http\Controllers;

use App\Models\Ministry;
use App\Models\OrganizationSurvey;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrganizationSurveyController extends Controller
{
    public function create()
    {
        $ministries = Ministry::all();
        return view('organization_form', compact('ministries'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            // Respondent Information
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                function ($attribute, $value, $fail) use ($request) {
                    $exists = OrganizationSurvey::where('email', $value)
                        ->where('ministry_id', $request->ministry_id)
                        ->exists();
                    
                    if ($exists) {
                        $fail('A survey from this email for the selected ministry already exists.');
                    }
                }
            ],
            'ministry_id' => 'required|integer|exists:ministries,id',
            
            // Department Information
            'dept_count' => 'nullable|integer|min:0',
            'dept_list' => 'nullable|string',
            
            // Printer Information
            'has_printers' => 'required|boolean',
            'printer_count' => [
                'nullable',
                'integer',
                'min:0',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->has_printers && $request->printers) {
                        $totalEntered = array_sum(array_column($request->printers, 'quantity'));
                        if ($totalEntered != $value) {
                            $fail('The total number of printers entered ('.$totalEntered.') does not match the specified printer count ('.$value.').');
                        }
                    }
                }
            ],
            
            // Printer Inventory Details
            'printers' => [
                'nullable',
                'array',
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->has_printers && !$value) {
                        $fail('Please add at least one printer since you indicated your organization has printers.');
                    }
                }
            ],
            'printers.*.name' => 'required_with:printers|string|max:255',
            'printers.*.model_number' => 'nullable|string|max:255',
            'printers.*.quantity' => 'required_with:printers|integer|min:1',
            'printers.*.status' => 'nullable|string|max:255',
            'printers.*.office_location' => 'nullable|string|max:255',
            'printers.*.remarks' => 'nullable|string',
        ]);

        // Create the survey
        $survey = OrganizationSurvey::create($data);

        // Add printers if they exist
        if ($data['has_printers'] && !empty($data['printers'])) {
            foreach ($data['printers'] as $printer) {
                $survey->printers()->create([
                    'name' => $printer['name'],
                    'model_number' => $printer['model_number'] ?? null,
                    'quantity' => $printer['quantity'],
                    'status' => $printer['status'] ?? null,
                    'office_location' => $printer['office_location'] ?? null,
                    'remarks' => $printer['remarks'] ?? null,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Survey submitted successfully.');
    }


    public function print($id)
    {
        $survey = OrganizationSurvey::with('printers')->findOrFail($id);
        $pdf = Pdf::loadView('survey_pdf', compact('survey'));
        return $pdf->download('organization_survey_'.$id.'.pdf');
    }
}
