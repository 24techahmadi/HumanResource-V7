<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapacityplanC extends Model
{
    protected $table ='planCs';
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
