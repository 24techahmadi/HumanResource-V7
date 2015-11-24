<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevplanB extends Model
{
    protected $table ='devplanbs';
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
