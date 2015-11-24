<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    //deathforms
    protected $table = 'deathforms';
    protected $fillable = [
        'AutoNumber',
        'RegistrationDate',
        'CardNo',
        'Name',
        'LastName',
        'FatherName',
        'GrandfatherName',
        'TazkeraNumber',
        'TazkeraPage',
        'TazkeraJuld',
        'ReasonType',
        'InjuredLevel',
        'CausedAccordingTo',
        'CausedForFistTime',
        'DeathDate',
        'InjuredDetails',
        'ProveFormInfoNo',
        'WaseqeFawtiNo',
        'WaseqaKhatDate',
        'WasyatKhatNo',
        'WasyatKhatDate',
        'MyProveDate',
        'RelatedworkInjured',
        'RelatedInjuredDate',
        'EmpNameOfHR',
        'BossNameOfHR',
        'CurrentDate',
        'RegNumber',
        'ExportNumber',
        'FormNumber',
        'RecieveDocumentation',
        'Justification'
    ];
}
