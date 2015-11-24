<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpplanA extends Model
{
    protected $table ='empplanAs';
    protected $fillable = [
        'DateOflastEvaluation',
        'Number',
        'org',
        'DateOflastinEvaluation',
        'NewDepartmentsInOldFacultays',
        'DepartmentsName',
        'Teacher',
        'Labraint',
        'Head',
        'GeneralTeachingManager',
        'TeachingMamor',
        'LibraryManager',
        'Technation',
        'DepartmentsMagazinsManager',
        'ServiceWorker',
        'Gard',
        'MotamedJensee',
        'Totale'
    ];
}
