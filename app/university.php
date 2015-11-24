<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class university extends Model
{
    protected $fillable = ['universityType','university_Name','universityPerName','FoundationYear','active','universityPrLocation','universityDistLocation'];

}
