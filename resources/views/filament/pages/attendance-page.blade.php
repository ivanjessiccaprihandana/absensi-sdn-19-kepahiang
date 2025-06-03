<x-filament::page>
    <div class="space-y-6">

        <h1 class="text-2xl font-bold">Presensi Siswa SD</h1>

        <div>
            <label for="class">Pilih Kelas:</label>
            <select wire:model="selectedClass" id="class">
                <option value="">-- Pilih Kelas --</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Pilih Mata Pelajaran --}}
        <div class="flex items-center gap-4">
            <label class="text-lg font-medium">Pilih Mata Pelajaran:</label>
            <select wire:model="selectedSubject" class="border rounded px-3 py-2">
                <option value="">-- Pilih Mata Pelajaran --</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->nama }}</option>
                @endforeach
            </select>
        </div>

        {{-- Pilih Pertemuan --}}
        <div class="flex items-center gap-4">
            <label class="text-lg font-medium">Pilih Pertemuan:</label>
            <select wire:model="selectedMeeting" class="border rounded px-3 py-2">
                <option value="">-- Pilih Pertemuan --</option>
                @foreach ($meetings as $meeting)
                    @if ($meeting->subject_id == $selectedSubject)
                        <option value="{{ $meeting->meeting_number }}">Pertemuan ke-{{ $meeting->meeting_number }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        {{-- Tabel presensi --}}
        @if ($selectedMeeting && $selectedSubject)
            <form wire:submit.prevent="save">
                <table class="w-full table-auto border border-gray-300 mt-4">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2 text-left">Nama Siswa</th>
                            <th class="border px-4 py-2 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td class="border px-4 py-2">{{ $student->name }}</td>
                                <td class="border px-4 py-2">
                                    <select wire:model="attendance.{{ $student->id }}"
                                            class="border rounded px-2 py-1">
                                        <option value="hadir">Hadir</option>
                                        <option value="izin">Izin</option>
                                        <option value="alpa">Tidak Hadir</option>
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button type="submit"
                        class="mt-4 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Simpan Presensi
                </button>
            </form>
        @endif

    </div>
</x-filament::page>
