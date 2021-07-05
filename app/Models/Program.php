<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public function majors() {
        // remmeber to recheck it
        return $this->belongsToMany(Major::class, 'Major_programs', 'major_id', 'program_id');
    }

    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class, 'Porgram_teachers', 'program_id', 'teacher_id');
    }
    public function students() {
        return $this->belongsToMany(Student::class, 'Program_students', 'program_id', 'student_id');
    }
}
