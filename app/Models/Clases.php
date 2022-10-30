<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function college(){
       return   $this->belongsTo(College::class);
    }
}
