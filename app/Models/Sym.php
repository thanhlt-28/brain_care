<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sym extends Model
{
    use HasFactory;
    protected $table = "syms";
    protected $fillable = ['type_name', 'type_id'];

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
