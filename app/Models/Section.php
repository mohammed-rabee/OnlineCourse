<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    public function majors() {
        return $this->belongsToMany(Major::class, 'major_program_section')
    }
    public function programs(){
        return $this->belongsToMany(Program::class, 'major_program_section');
    }

    // ask about teacher assign to section
    // answered that you choose from the teacher assigned to program
    public function sessions(){
        return $this->hasMany(Session::class);
    }
}
