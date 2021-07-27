<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public function years() {
        return $this->belongsToMany(Year::class, 'yearPrograms');
    }
}