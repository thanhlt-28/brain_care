<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $table = "treatments";
    protected $fillable = ['treat_name', 'symptom', 'treat_dob', 'treat_gender', 'treat_phone', 'treat_email', 'treat_address', 'sym_time', 'result', 'medicine_once', 'medicine_twice', 'medicine_three', 'medicine_fourth'];
}
