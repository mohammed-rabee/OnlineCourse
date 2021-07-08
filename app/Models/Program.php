<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public function majors() {
        // remmeber to recheck it
        return $this->belongsToMany(Major::class, 'major_program_section');
    }

    public function sections() {
        return $this->belongsToMany(Section::class, 'major_program_section');
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class, 'porgram_teachers');
    }
    public function students() {
        return $this->belongsToMany(Student::class, 'program_students');
    }
}
