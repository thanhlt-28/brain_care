<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $fillable = ['name', 'doB', 'gender', 'mobile', 'address', 'email', 'status'];

    public function symptom()
    {
        return $this->hasMany(Symptom::class, 'cust_id');
    }
}
