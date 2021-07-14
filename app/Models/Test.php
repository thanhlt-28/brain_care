<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = "tests";
    protected $fillable = ['cust_name', 'symptom', 'cust_dob', 'cust_gender', 'phone', 'cust_email', 'cust_address', 'cust_status', 'time_sym', 'result'];
}
