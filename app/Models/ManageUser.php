<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['name','dob','sex','religion','email','phone','address',
                           'jod','photo','username','password','usertypeID','create_date','modify_date','create_userID','create_username','	create_usertype','active'];
}
