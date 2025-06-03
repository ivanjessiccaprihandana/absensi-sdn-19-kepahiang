    @extends('layouts.app')

    @section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-900 to-blue-700">
        <!-- Hero Section -->
        <div class="container mx-auto px-4 py-24 flex flex-col-reverse md:flex-row items-center gap-12">
            <div class="md:w-1/2 space-y-6 text-white">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-300 to-yellow-200">Presensi Digital</span><br>
                    SDN 19 Kepahyang
                </h1>
                <p class="text-xl text-blue-100">Transformasi manajemen kehadiran dengan teknologi modern berbasis web.</p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="{{ url('admin/login') }}" 
                    class="px-8 py-3 bg-yellow-400 hover:bg-yellow-300 text-blue-900 font-bold rounded-full transition-all transform hover:scale-105 shadow-lg">
                    Login Admin
                    </a>
                    <a href="#features" 
                    class="px-8 py-3 border-2 border-white text-white hover:bg-white hover:text-blue-900 font-bold rounded-full transition-all">
                    Jelajahi Fitur
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 relative">
                <div class="absolute -top-6 -left-6 w-full h-full bg-yellow-400 rounded-2xl -z-10"></div>
                <img src="{{ asset('images/logo.png') }}" alt="Siswa SDN 19 Kepahyang" 
                    class="rounded-2xl shadow-2xl border-4 border-white transform rotate-1 hover:rotate-0 transition">
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="py-16 bg-white/90 backdrop-blur-sm">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <span class="text-blue-600 font-bold">FITUR UNGGULAN</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 mt-2">Kemudahan dalam Satu Platform</h2>
                </div>
                
                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-xl border-l-4 border-yellow-400 transition-all hover:-translate-y-2">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-yellow-100 group-hover:text-yellow-600 transition">
                            <i class="fas fa-user-check text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Presensi Real-time</h3>
                        <p class="text-gray-600">Pencatatan kehadiran siswa secara digital dengan validasi instan.</p>
                    </div>
                    
                    <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-xl border-l-4 border-yellow-400 transition-all hover:-translate-y-2">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-yellow-100 group-hover:text-yellow-600 transition">
                            <i class="fas fa-chart-pie text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Analisis Data</h3>
                        <p class="text-gray-600">Visualisasi data kehadiran dengan grafik interaktif dan laporan periodik.</p>
                    </div>
                    
                    <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-xl border-l-4 border-yellow-400 transition-all hover:-translate-y-2">
                        <div class="w-14 h-14 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-yellow-100 group-hover:text-yellow-600 transition">
                            <i class="fas fa-mobile-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-blue-900 mb-3">Akses Mobile</h3>
                        <p class="text-gray-600">Sistem responsif yang dapat diakses dari perangkat mobile maupun desktop.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection