<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationreport extends Model
{
    protected $table ='relationreports';
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
