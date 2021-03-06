<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function programs() {
        return $this->belongsToMany(YearProgram::class, 'teaches');
    }

    public function sections() {
        return $this->belongsToMany(Section::class, 'teaches');
    }
}

