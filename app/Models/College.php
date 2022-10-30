<?php

namespace App\Models;

use App\Http\Controllers\admin\TeacherController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function teachers(){
        return  $this->hasMany(Teacher::class);
    }

    public function majors(){
        return  $this->hasMany(Major::class);
    }

    public function courses(){
        return  $this->hasMany(Course::class);
    }

    public function clases(){
        return $this->hasMany(Clases::class);
    }

}
