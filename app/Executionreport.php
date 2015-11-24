<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Executionreport extends Model
{
    protected $table ='executionreports';
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
