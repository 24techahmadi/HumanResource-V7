<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LowerEvaluation extends Model
{
    protected $table ='lowerevaluations';
    protected $fillable = [
        'Ministry',
        'Reyasat',
        'Moderyat',
        'Name',
        'LastName',
        'FatherName',
        'CurrentPositionDuration',
        'EvaluationType',
        'LastEvaluationDate',
        'LastEvaluationResult',
        'EmployeeType',
        'CurrentBast',
        'CurrentStep',
        'GroupWork',
        'RecieverSatisification',
        'TechnicalInformation',
        'TechnicalExperts',
        'AcomplishmentQuality',
        'WorkingWithPresure',
        'SelfSecurity',
        'SavingOthersSecurity',
        'OtherSecurity',
        'JobAvalibility',
        'BehaviorRole',
        'TotalOfScore',
        'StanderdScore',
        'Categories',
        'EvaluationResult',
        'DirectManagerDesision',
        'DirectManagerScore',
        'EvaluatoreComment'
    ];
}
