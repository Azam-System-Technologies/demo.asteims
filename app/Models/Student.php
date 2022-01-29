<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
        protected $table = 'students';
        protected $primaryKey = 'id';
         protected $fillable = ['name', 'guardian', 'date_of_birth','place_of_birth','emergency_contact_no','emergency_contact_relation','gender',
        'bloodgroup','religion','email','phone','address','country','state','class_id','section_id','campus_id','studentGroupID','optionalSubjectID',
        'registerNo','roll','file_path','extra_curricular_activities','admission_result','remarks','monthly_tuttion_fee','admission_fee','registration_fee','admission_status','username','password'
];

}
