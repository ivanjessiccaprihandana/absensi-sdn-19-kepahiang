<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    // Subject.php
    public function meetings() {
        return $this->hasMany(Meetings::class);
    }

}
