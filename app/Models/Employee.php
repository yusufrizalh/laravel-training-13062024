<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //* mass assignment dibagi menjadi 2:
    //* 1> guarded
    //* 2> fillable
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
