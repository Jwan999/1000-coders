<?php

namespace App\Exports;

//use App\Applicant;
use App\Models\Applicant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ApplicantsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Applicant::where('stage', null)->get();
    }
}
