<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function years() {
        return $this->hasMany(Year::class);
    } 

}
