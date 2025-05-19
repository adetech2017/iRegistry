<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrganizationSurvey extends Model
{
    protected $fillable = [
        'name', 'designation', 'position', 'email', 'ministry_id',
        'dept_count', 'dept_list', 'has_printers', 'printer_count',
    ];

    protected $casts = [
        'has_printers' => 'boolean',
    ];

    public function printers()
    {
        return $this->hasMany(PrinterRecord::class);
    }
}
