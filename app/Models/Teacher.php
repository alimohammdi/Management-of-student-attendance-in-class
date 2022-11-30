<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function college(){
        return $this->belongsTo(College::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function addunits(){
        return $this->belongsToMany(Addunit::class);
    }
}
