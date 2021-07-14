<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $table = "medicine";
    protected $fillable = ['name', 'type', 'grouptype', 'market', 'begin', 'treatment', 'company', 'national'];
}
