<x-filament::page class="filament-dashboard-page bg-gradient-to-br from-yellow-50 via-white to-slate-100 min-h-screen py-10">

    {{-- Kartu Statistik --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 px-4">
        @php
            $cards = [
                [
                    'label' => 'Total Siswa',
                    'value' => '1.240',
                    'icon' => 'heroicon-o-user',
                    'color' => 'text-yellow-500',
                    'desc' => 'Data per hari ini',
                ],
                [
                    'label' => 'Presensi Hari Ini',
                    'value' => '987',
                    'icon' => 'heroicon-o-calendar',
                    'color' => 'text-green-500',
                    'desc' => 'Sudah hadir',
                ],
                [
                    'label' => 'Belum Hadir',
                    'value' => '253',
                    'icon' => 'heroicon-o-clock',
                    'color' => 'text-red-500',
                    'desc' => 'Belum check-in',
                ],
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transform transition duration-300 ease-in-out hover:-translate-y-1">
                <div class="flex items-center justify-between mb-3">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $card['label'] }}</h3>
                    <x-dynamic-component :component="$card['icon']" class="w-6 h-6 {{ $card['color'] }}" />
                </div>
                <div class="text-4xl font-bold text-gray-900">{{ $card['value'] }}</div>
                <div class="text-sm text-gray-500 mt-1">{{ $card['desc'] }}</div>
            </div>
        @endforeach
    </div>

    {{-- Widget Tambahan --}}
    <div class="mt-12 px-4">
        <x-filament::widgets
            :widgets="$this->getWidgets()"
            :columns="$this->getColumns()"
        />
    </div>

</x-filament::page>
