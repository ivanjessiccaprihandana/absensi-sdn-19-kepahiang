<!DOCTYPE html>
<html>
<head>
    <title>Rekap Presensi</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #999; padding: 5px; text-align: center; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Rekap Presensi Siswa</h2>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                @foreach ($meetings->sortBy('meeting_number') as $meeting)
                    <th>{{ $meeting->subject->nama }}<br>Pertemuan-{{ $meeting->meeting_number }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    @foreach ($meetings->sortBy('meeting_number') as $meeting)
                        @php
                            $presensi = $meeting->attendances->where('student_id', $student->id)->first();
                        @endphp
                        <td>{{ $presensi->status ?? '-' }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
