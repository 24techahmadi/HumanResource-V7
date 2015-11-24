<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listcondidate extends Model
{
    protected $fillable = [
        'CodeNumber',
        'Date',
        'JobTitle',
        'Department',
        'Presedential',
        'Ministry',
        'AnnouncementDate',
        'EmpId',
        'Name',
        'FatherName',
        'LastName',
        'DistributionDate',
        'ReceiveDate',
        'LastAcceptanceDate',
        'Shortlist',
        'InterviewDate',
        'InterviewScore',
        'Selection',
        'Comment'
    ];
}
