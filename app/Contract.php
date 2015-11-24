<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contractforms';
    protected $fillable = [
        'IDNumber',
        'TaeenatRegNo',
        'CardNo',
        'OfficeName',
        'Lawshep',
        'WorkHead',
        'Officephone',
        'photo',
        'Name',
        'FatherName',
        'BirthDate',
        'TazkiraNo',
        'Gender',
        'MarritalStatuse',
        'Radef',
        'Proffisinal',
        'EducationLevel',
        'EducationField',
        'Educationplace',
        'Healthinfo',
        'Pastworkjustfi',
        'PermenantAdd',
        'CurrentAdd',
        'WorkType',
        'Workplace',
        'Position',
        'SpasificContract',
        'UnSpasificContract',
        'UnSpasificContractFrom',
        'UnSpasificContractTo',
        'SpecificWorks',
        'TestPeriod',
        'TestPeriodFrom',
        'TestPeriodFromTo',
        'Perhour',
        'Makol',
        'Copon',
        'Clothworkequp',
        'TrnspTashelat',
        'healthInsurrence',
        'OtherTadiat',
        'RepName',
        'RepLastName',
        'RepfName',
        'RepRelatio',
        'Sokoknumber',
        'RegNumber',
        'PageNo',
        'JuldNo',
        'Sudorplace',
        'PermenantAddress',
        'CurrentAddress'
    ];
}
