<?php
namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Meetings;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Attendances;

class RekapPresensiController extends Controller
{
    public function download()
    {
        $students = Student::all();
        $meetings = Meetings::with(['subject', 'attendances'])->get(); // pastikan relasi 'attendances' valid

        $pdf = Pdf::loadView('rekap.presensi-pdf', compact('students', 'meetings'))
                  ->setPaper('a4', 'landscape');

        return $pdf->download('rekap-presensi-siswa.pdf');
    }
}
