<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    // public function sessions () {
    //     return $this->belongsToMany(Session::class,'Students_Sessions', 'user_id', 'session_id');
    // }

    public function year() {
        return $this->belongsTo(Year::class);
    }

    public function programs() {
        return $this->belongsToMany(YearProgram::class, 'registers');
    }
}
