<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'url',
        'title',
        'description',
        'date',
        'type_id'
    ];
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
