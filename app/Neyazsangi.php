<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neyazsangi extends Model
{
    protected $table = 'neyazsanjeforms';
    protected $fillable = [
        'Name',
        'FatherName',
        'EducationLevel',
        'University',
        'CurrentJob',
        'Experience',
        'Reyasat',
        'Province',
        'Phone',
        'q1',
        'q2',
        'q3',
        'q4'
    ];
}
