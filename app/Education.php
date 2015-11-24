<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educationalneeds';
    protected $fillable = [
        'Name',
        'LastName',
        'FatherName',
        'BirthDate',
        'PermenantAddress',
        'CurrentAddress',
        'MarritalStatues',
        'TazkeraNumber',
        'Phone',
        'BastTitle',
        'EducationLevel',
        'EducationalField',
        'University',
        'Bast',
        'BastStep',
        'Experience',
        'Ministry',
        'Reyasat',
        'PeriodsName',
        'Details',
        'PeriodsDuration',
        'Preprationer',
        'EnglishWrittingLevel',
        'EnglishReadingLevel',
        'EnglishSpeakingLevel',
        'ComputerSkills',
        'ComputerSkillsLevel',
        'HumanLaws',
        'HumanLawsLevel',
        'Regulations',
        'RegulationsLevel',
        'Rules',
        'RulesLevel',
        'Directions',
        'DirectionsLevel'
    ];
}
