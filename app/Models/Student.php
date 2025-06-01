<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['no_presensi','nama_siswa','mata_pelajaran'];



    // Student.php
    public function class() {
        return $this->belongsTo(Classes::class); // Gunakan nama Class → Classroom karena "class" reserved word
    }

    public function attendances() {
        return $this->hasMany(Attendances::class);
    }

}
