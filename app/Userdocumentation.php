<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdocumentation extends Model
{
    protected $table='users';
    protected $fillable = [
        'name',
        'FatherName',
        'GrandFatherName',
        'DateOfBirth',
        'PlaceOfBirth',
        'TazkiraNumber',
        'FirstJobDate',
        'StatisticsCode',
        'Organization',
        'Reyasat',
        'JobTitle',
        'Bast',
        'Qadam',
        'RegistrationDate',
        'Position',
        'UniversityName',
        'EducationPlace',
        'EducationLevel',
        'EducationField',
        'StartDate',
        'EndDate',
        'VocationalStartDate',
        'VocationalEndDate',
        'OrgName',
        'Country',
        'VocationalEduField',
        'Result',
        'BookNumber',
        'LanguagesSkills',
        'JobSkills',
        'JobSkillLevel',
        'ExpOrgName',
        'ExpJobTitle',
        'ExpBast',
        'ExpQadam',
        'ExpJobPlace',
        'ExpStartDate',
        'ExpEndDate',
        'JobSummary',
        'EvlauationDate',
        'EvaluationType',
        'MainEvaluationScore',
        'EvaluationResult',
        'OrderNumber',
        'OrderDate',
        'Grade',
        'Assignment',
        'MakafatIteam',
        'Reason',
        'RelatedOfficial',
        'OrderPublishDate',
        'MakafatTypes',
        'PanishmentList',
        'PanishmentResone',
        'PanishmentRelatedOfficial',
        'PanishmentOrderDate',
        'PanishmentOrderCode',
        'PanishmentType'

    ];
}
