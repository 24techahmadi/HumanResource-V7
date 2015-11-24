<?php

namespace App\Http\Requests\admin;
use App\university;
use App\Http\Requests\Request;

class AdminUnivReq extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
            $universities = university::find($this->universities);

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'universityType'  => 'required|max:255',
                    'university_Name'  => 'required|alpha|string|unique:universities,university_Name|max:255',
                    'universityPerName'  => 'required|alpha|max:255',
                    'FoundationYear'  =>'required',
                    'universityPrLocation'  =>'required|alpha|max:255',
                    'universityDistLocation'  =>'required|alpha|max:255',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'universityType'  => 'max:255',
                    /* It allows us to update one field ($universities->id)*/        /* Sajjad Hosaini */
                    'university_Name'  => 'required|max:255|alpha|unique:universities,university_Name,'.$universities->id,
                    /* Ex: Select * from `universities` where `university_Name` = rana and `id` <> 2 */
                    'universityPerName'  => 'required|alpha|max:255',
                    'FoundationYear'  =>'required',
                    'universityPrLocation'  =>'required|alpha|max:255',
                    'universityDistLocation'  =>'required|alpha|max:255',

                ];
            }
            default:
                break;
        }
    }
}
