<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table ='orders';
    protected $fillable = [
        'DocumentType',
        'CodeNumber',
        'Date',
        'Income',
        'Title',
        'MinistryComment',
        'AccomplishmentComment',
        'FutureAccomplishment',
    ];
}
