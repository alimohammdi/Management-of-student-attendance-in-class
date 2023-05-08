<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function college(){
        return $this->belongsTo(College::class);
    }
    public function major(){
        return $this->belongsTo(Major::class);
    }

    public function courses(){
        return $this->belongsToMany(Course::class);
    }


    public function selectunit(){
        return $this->hasMany(Selectunit::class);
    }


}
