<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bast extends Model
{
    protected $fillable = [
        'CodeNumber',
        'Title',
        'Type',
        'AnnouncementStartDate',
        'AnnouncementEndDate',
    ];
}
