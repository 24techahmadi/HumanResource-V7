<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DevplanC extends Model
{
    protected $table ='devplancs';
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
