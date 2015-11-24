<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'employeeplans';

    protected $fillable = [
        'DateOfPlan',
        'RelatedTo',
        'Ameryat',
        'JustfierName',
        'Nationalstrategy',
        'DepartmentStrategy',
        'PlanPurpose',
        'NeededActivities',
        'Accomplisher',
        'Resources',
        'AccomplishmentPlace',
        'AcomplishmentDate',
        'Results'

    ];
}
