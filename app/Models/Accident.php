<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    use HasFactory;
    protected $fillable = [
        'accidentRef', 'accidentTypeID', 'accidentDate', 'companyID',
        'depotID', 'personTypeID', 'forename', 'surname', 'hasAnalysisCompleted',
        'investigationDetails', 'accidentSignOffID', 'SHAManagerSignOffID',
        'regionalMDSignOffID', 'esgHeadSignOffID', 'isDeleted'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'companyID');
    }

    public function depot()
    {
        return $this->belongsTo(Depot::class, 'depotID');
    }

    public function accidentType()
    {
        return $this->belongsTo(AccidentType::class, 'accidentTypeID');
    }
}
