<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExecutionplanC extends Model
{
    protected $table ='executionplancs';
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
