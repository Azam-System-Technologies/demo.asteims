<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentatt extends Model
{
    protected $table = 'studentatts';
    protected $primaryKey = 'id';
    protected $fillable = ['class','section','date'];
}
