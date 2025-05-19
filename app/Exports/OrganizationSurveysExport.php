<?php

namespace App\Exports;

use App\Models\OrganizationSurvey;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrganizationSurveysExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrganizationSurvey::with('printers')->get();
    }
}
