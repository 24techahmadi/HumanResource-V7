<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Selection extends Model
{
    protected $table = 'selectionforms';

    protected $fillable = [
        'Position',
        'JobTitle',
        'Reyasat',
        'Question1',
        'Question1Comments',
        'Question2',
        'Question2Comments',
        'Question3',
        'Question3Comments',
        'Question4',
        'Question4Comments',
        'Question5',
        'Question5Comments',
        'Question6',
        'Question6Comments',
        'RealScore',
        'PossibleScore',
        'Comments',
        'TotleScore',
        'CommiteeBossName',
        'OrgRepresentativeName',
        'GenderRepresentativeName',
        'CriticName',
        'ClerckName',
        'Date',
    ];
}
