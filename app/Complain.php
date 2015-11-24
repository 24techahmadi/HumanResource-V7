<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $table = 'complainforms';
    protected $fillable = [
        'Name',
        'FatherName',
        'LastName',
        'Province',
        'District',
        'Village',
        'EducationLevel',
        'EducationPlace',
        'HaveJob',
        'TargetBast',
        'ComplainedOffice',
        'Bast',
        'PlaceOfJob',
        'ComplainedTitle',
        'RelatedOffice',
        'ComplaindPossition',
        'ComplainedOfficeAdds',
        'ComplainObjectives',
        'NotShortlistedDate',
        'ExaminationDate',
        'ResultAnnouncmentDate',
        'ExaminationType',
        'MyComplians',
        'ComplainsID',
        'ComplainsDocs',
        'ComplainsDetail',
        'ComplainerSignatureDate',
        'BoardSignatureDate',
        'ExecutionSignatureDate',
        'EvaluationSignatureDate',
        'ResponsibleTeams'
    ];
}
