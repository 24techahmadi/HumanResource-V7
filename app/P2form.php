<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class P2form extends Model
{
    protected $fillable = [
        'ExecutionNumber',
        'Name',
        'FatherName',
        'EmployeeNumber',
        'ImplementationDate',
        'ImplementationType',
        'AnotherExecutionType',
        'Duty',
        'Bast',
        'DutySalaryPosition',
        'DutyOffice',
        'DutyDepartment',
        'DutyAddress',
        'Comment'
    ];
}
