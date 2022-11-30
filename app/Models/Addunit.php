<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addunit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function college(){
        return $this->belongsTo(College::class);
    }

    public function time()
    {
        return $this->hasMany(Time::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
