<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    protected $table = 'shortlistcondidates';

    protected $fillable = [
        'AnnouncementDate',
        'EndDate',
        'ReannouncementDate',
        'ReannouncementEndDate',
        'Ministry',
        'Reyasat',
        'Bast',
        'IDNumber',
        'Name',
        'LastName',
        'FatherName',
        'EducationLevel',
        'Email',
        'Phone',
        'ExpWorkRelated',
        'GenrelExp',

        'Dari',
        'Pashto',
        'English',
        'MoreLanguage',
        'MoreLanguageNames',
        'Windows',
        'Office',
        'Networking',
        'MoreOnComputers',
        'MoreOnComputersDetails',
        'GoodManagement',
        'bodyLanguage',
        'GoodCommunication',
        'OtherSkills',
        'OtherSkillsDetails',
        'Rules',
        'Result'

    ];

}
