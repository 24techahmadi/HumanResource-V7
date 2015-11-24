<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comparison extends Model
{
    protected $fillable = [
        'Title',
        'Year',
        'Bast',
        'Amount',
        'BastIncrease',
        'BastDecrease',
        'RoleForYearOf',
        'ToBast',
        'NewAmount',
        'NewCode',
        'Comment'
    ];
}
