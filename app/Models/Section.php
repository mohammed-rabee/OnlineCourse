<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    
    public function programs() {
        return $this->belongsTo(YearProgram::class);
    }
    
    // ask about teacher assign to section
    // answered that you choose from the teacher assigned to program
    public function sessions(){
        return $this->hasMany(Session::class);
    }
}
