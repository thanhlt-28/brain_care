<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;
    protected $table = "symptom";
    protected $fillable = ['symName', 'yesNo'];

    public function customer()
    {
        return $this->hasMany(Customer::class, 'cust_id');
    }

    // public function setSymptomAttribute($value)
    // {
    //     $this->attributes['symName'] = json_encode($value);
    //     $this->attributes['cust_id'] = json_encode($value);
    //     $this->attributes['yesNo'] = json_encode($value);
    // }
    // public function getSymptomAttribute($value)
    // {
    //     return $this->attributes['symName'] = json_decode($value);
    //     return $this->attributes['cust_id'] = json_decode($value);
    //     return $this->attributes['yesNo'] = json_decode($value);
    // }
}
