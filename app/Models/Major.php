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
        return $this->belongsToMany(Program::class, 'Major_programs', 'major_id', 'program_id');
    }
}
