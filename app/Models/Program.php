<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public function majors() {
        // remmeber to recheck it
        return $this->belongsToMany(Major::class, 'major_programs');
    }

    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function teachers() {
        return $this->belongsToMany(Teacher::class, 'porgram_teachers');
    }
    public function students() {
        return $this->belongsToMany(Student::class, 'program_students');
    }
}
