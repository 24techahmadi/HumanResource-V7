<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upperevaluation extends Model
{   protected $table ='upperevaluations';
    protected $fillable = [
        'Name',
        'FatherName',
        'GrandFatherName',
        'BirthDate',
        'EducationLevel',
        'EucationField',
        'PrimaryRegDate',
        'CompetitionRegDate',
        'Qadam',
        'Bast',
        'BastTitle',
        'Ministry',
        'Reysat',
        'Moderiat',
        'QadamPayment',
        'SalaryTotal',
        'Responsibility',
        'AccomplishmentType',
        'WorkPlane',
        'AnnualAccomplishmentType',
        'OfficialEvaluationResult',
        'DirectManagerEvaluationResult',
        'HeadManagerEvaluationResult',
        'TotalOfScore',
        'OfficialsResult',
        'OfficialName',
        'OfficialDate',
        'DirectManager',
        'YearlyWorkplanScore',
        'AdditionalRuleScore',
        'BothSectionTotalScore',
        'FinalEvaluationResult',
        'OfficialSatisfaction',
        'DirecteManagerAcceptance',
        'HeadManagerName'

    ];
}
