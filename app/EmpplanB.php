<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpplanB extends Model
{
    protected $table ='empplanbs';
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
