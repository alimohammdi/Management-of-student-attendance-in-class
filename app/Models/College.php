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
        $this->hasMany(Student::class);
    }
    public function teachers(){
        $this->hasMany(Teacher::class);
    }

    public function majors(){
        $this->hasMany(Major::class);
    }


}
