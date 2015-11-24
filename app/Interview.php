<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $table = 'interviewcommitees';

    protected $fillable = [
        'Name',
        'LastName',
        'Job',
        'CommiteePosition',
        'Email',
        'Date'
    ];
}
