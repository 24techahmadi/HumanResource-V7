<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $fillable = [
        'ReyastName',
        'idnumber',
        'Name',
        'FatherName',
        'Bast',
        'Score',
        'BastTitle',
        'Estehzari',
        'WorkshopDays',
        'Comment'

    ];
}
