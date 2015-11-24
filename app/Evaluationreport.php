<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluationreport extends Model
{
    protected $table ='evaluationreports';
    protected $fillable = [
        'Date',
        'To',
        'Reporter',
        'Purpouses',
        'ManagementField',
        'FinanceField',
        'EnglishLanguageField',
        'leadershipDevelopmentField',
        'TypsOfActivitiesDone',
        'LearningActivitiesField',
        'ITField',
        'OrganizationField',
        'Acheavments',
        'ErrorsInActivities',
        'ProblemsOfActitvities',
        'ProventersOfJobDone',
        'ReportPrapretioner',
        'PreparDate',
        'ReportJustfiers',
        'JustifierDate'
    ];

}
