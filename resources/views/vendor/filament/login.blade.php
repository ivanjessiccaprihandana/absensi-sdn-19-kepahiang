<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 via-white to-purple-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <!-- Logo / Judul -->
        <div class="text-center">
            <img class="mx-auto h-16 w-16" src="{{ asset('images/logo.png') }}" alt="Logo">
            <h2 class="mt-4 text-3xl font-extrabold text-indigo-700">Selamat Datang 👋</h2>
            <p class="mt-2 text-sm text-indigo-500">Masuk untuk mengakses dashboard presensi siswa</p>
        </div>

        <!-- Form Login -->
        <form wire:submit.prevent="authenticate" class="bg-white shadow-lg rounded-xl p-6 space-y-6">
            <!-- FORM -->
            {{ $this->form }}

            <!-- Tombol Submit -->
            <x-filament::button type="submit" form="authenticate" class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 hover:from-indigo-600 hover:to-purple-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition-all duration-200">
                {{ __('filament::login.buttons.submit.label') }}
            </x-filament::button>
        </form>

        <!-- Footer Kecil -->
      
    </div>
</div>
