<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // public function sessions () {
    //     return $this->belongsToMany(Session::class,'Students_Sessions', 'user_id', 'session_id');
    // }

    public function major() {
        return $this->belongsTo(Major::class);
    }

    public function programs() {
        return $this->belongsToMany(Program::class, 'Program_students', 'program_id', 'student_id');
    }
}
