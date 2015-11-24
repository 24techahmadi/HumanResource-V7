<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationplanC extends Model
{
    protected $table ='relationplancs';
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
