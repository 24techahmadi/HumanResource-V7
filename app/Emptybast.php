<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emptybast extends Model
{
    protected $fillable = [
        'Name',
        'Bast',
        'Office',
        'AnnouncementStartDate',
        'AnnouncementEndDate',
    ];
}
