<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retired extends Model
{
    //retiredforms
    protected $table = 'retiredforms';
    protected $fillable = [
        'AutoNumber',
        'Validate',
        'OrignalNo',
        'Date',
        'OrgCode',
        'OrgName',
        'Reyasat',
        'Province',
        'Photo',
        'EmpCardNo',
        'Rutba',
        'EmpName',
        'LastName',
        'FatherName',
        'GrandfatherName',
        'TazkeraNo',
        'Juld',
        'Page',
        'BirthDate',
        'Gender',
        'RepresentiativePhoto',
        'RepRelation',
        'RepName',
        'RepLastName',
        'RepFatherName',
        'RepGrandfatherName',
        'RepTazkeraNumber',
        'RepTazkeraJuld',
        'RepTazkeraPage',
        'RepBirthDate',
        'RepKhatNo',
        'RepGender',
        'RequesterCurrentAddress',
        'ReqDestrict',
        'ReqProvince',
        'ReqPhone',
        'SimpleLanguage',
        'Moqarara',
        'OtherDocumentation',
        'RetiredType',
        'RetiredDate',
        'RetiredNumber',
        'LikeToRetired',
        'IfyesdDate',
        'SurviverName',
        'SurLastName',
        'SurFatherName',
        'SurRelation',
        'SurAge',
        'SurStatues',
        'JusName',
        'JusWorkName',
        'JusprofisionalkName',
        'JusheadkName',
        'DocDate',
        'DocCodeNumber',
        'DocExportNumber',
        'HRF04Number',
        'HRF05Number'
    ];
}
