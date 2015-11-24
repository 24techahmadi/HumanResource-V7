<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevplanA extends Model
{
    protected $table ='devplanAs';
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
