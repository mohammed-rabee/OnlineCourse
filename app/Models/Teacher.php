<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function programs() {
        return $this->belongsToMany(Program::class, 'Porgram_teachers', 'program_id', 'teacher_id');
    }
}
