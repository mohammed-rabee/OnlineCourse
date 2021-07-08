<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function programs() {
        return $this->belongsToMany(Program::class, 'major_program_section');
    }

    public function sections() {
        return $this->belongsToMany(Section::class, 'major_program_section');
    }
}
