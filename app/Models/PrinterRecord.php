<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrinterRecord extends Model
{
    protected $fillable = [
        'organization_survey_id',
        'name',
        'model_number',
        'quantity',
        'status',
        'office_location',
        'remarks'
    ];

    public function organizationSurvey()
    {
        return $this->belongsTo(OrganizationSurvey::class);
    }
}
