<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluationplanC extends Model
{
    protected $table ='evaluationplancs';
    protected $fillable = [
        'DateOflastEvaluation',
        'Number',
        'org',
        'Edary',
        'Dormatory',
        'Haspital',
        'Totle',
        'Edarysecond',
        'Dormatorysecond',
        'Haspitalsecond',
        'Totalsecond',
        'TotaleofTotle'
    ];
}
