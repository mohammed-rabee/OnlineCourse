<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //
    public function students() {
        return $this->hasMany(Student::class);
    }

    public function programs() {
        return $this->belongsToMany(Program::class , 'yearPrograms');
    }
}
