{{-- resources/views/informasi/visi-misi.blade.php --}}
@extends('layouts.app')

@section('title', 'Visi Misi')

@section('content')
    <!-- Hero Section -->
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Visi & <span class="text-yellow-300">Misi</span></h1>
                <p class="text-xl opacity-90">Arah dan Tujuan Pembangunan Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Visi Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">VISI</h2>
                    <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div
                    class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 md:p-12 shadow-lg border-b-4 border-transparent hover:border-yellow-400">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <blockquote class="text-2xl md:text-3xl font-bold text-green-900 leading-relaxed">
                            "MEWUJUDKAN MASYARAKAT YANG MAJU PADA TATANAN PEMERINTAHAN, AGAMA DAN ADAT DI NAGARI PEMATANG
                            PANJANG"
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">MISI</h2>
                    <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Misi cards - semua card tetap sama tapi hilangkan [cite_start] dan [cite: xxx] -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">1</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Menjalin Hubungan Baik dengan Semua
                                    Pihak
                                </h3>
                                <p class="text-gray-600">
                                    Menjalin hubungan dan komunikasi yang baik dengan BPN, Niniak Mamak, Ulama, Bundo
                                    Kanduong, Pemuda dan semua pihak terkait untuk membangun nagari.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">2</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Menjalankan Roda Pemerintahan Secara
                                    Baik dan Benar
                                </h3>
                                <p class="text-gray-600">
                                    Menjalankan roda pemerintahan secara baik dan benar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">3</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Berupaya Membangun Pasar Nagari</h3>
                                <p class="text-gray-600">
                                    Berupaya membangun pasar nagari.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">4</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Mengaktifkan BUMNAG dan KUD</h3>
                                <p class="text-gray-600">
                                    Mengaktifkan Badan Usaha Milik Nagari (Bumnag) dan Koperasi Unit Desa (KUD).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">5</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Bekerjasama dengan Guru Sekolah dan
                                    Mushollah
                                </h3>
                                <p class="text-gray-600">
                                    Bekerjasama dengan para guru di sekolah dan mushollah.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">6</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Melibatkan Putra/i Terbaik Nagari</h3>
                                <p class="text-gray-600">
                                    Melibatkan Putra putri terbaik nagari, seperti anggota DPRD, Perantau, Pengusaha, tokoh
                                    masyarakat dan anak nagari yang bekerja dikantor kantor pemerintahan di Kabupaten
                                    Sijunjung untuk membangun nagari.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">7</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Membangun Balai Nikah / Ruang
                                    Konsultasi Agama dan Surau Adat
                                </h3>
                                <p class="text-gray-600">
                                    Membangun Balai nikah atau ruang konsultasi agama dan surau adat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">8</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Melaksanakan Penyelesaian Masalah
                                    dengan 3 Norma
                                </h3>
                                <p class="text-gray-600">
                                    Melaksanakan penyelesaian masalah secara maksimal dengan acuan 3 norma (Pemerintah,
                                    Agama dan adat).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">9</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Memperbaiki Sistem Jual Beli Tanah</h3>
                                <p class="text-gray-600">
                                    Memperbaiki sistem jual beli tanah (bersertipikat atau yang belum bersertipikat).
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">10</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Mendata dan Legalisasi Aset
                                    Pemerintahan Nagari
                                </h3>
                                <p class="text-gray-600">
                                    Mendata dan legalisasi aset aset pemerintahan nagari.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">11</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Berupaya Membangun Pondok Pesantren
                                </h3>
                                <p class="text-gray-600">
                                    Berupaya untuk membangun pondok pesantren.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">12</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Meningkatkan Sistem dan Fasilitas
                                    Olahraga
                                </h3>
                                <p class="text-gray-600">
                                    Meningkatkan sistem dan fasilitas olahraga.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600 hover:border-yellow-400">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-green-600 font-bold text-xl">13</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Menggali Potensi Nagari untuk Menjadi
                                    Nagari Mandiri
                                </h3>
                                <p class="text-gray-600">
                                    Menggali potensi nagari untuk menjadi nagari yang mandiri.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-600 hover:border-green-600">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <span class="text-yellow-600 font-bold text-xl">14</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-3">Bersikap Terbuka kepada Pendatang</h3>
                                <p class="text-gray-600">
                                    Bersikap terbuka kepada pendatang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Strategi Section -->
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12 border-b-4 border-transparent hover:border-yellow-400">
                <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Strategi Pencapaian</h3>
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Strategy cards - hilangkan citation tags -->
                    <div
                        class="text-center bg-white p-6 rounded-lg shadow-md border-b-4 border-green-500 hover:border-yellow-500">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Menjadikan Rakyat sebagai Subjek Pembangunan
                        </h4>
                        <p class="text-gray-600 text-sm">
                            Menjadikan rakyat sebagai subjek pembangunan dan tidak semata-mata menjadi objek pembangunan.
                        </p>
                    </div>
                    <div
                        class="text-center bg-white p-6 rounded-lg shadow-md border-b-4 border-yellow-500 hover:border-green-500">
                        <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Meningkatkan Peran Serta Masyarakat</h4>
                        <p class="text-gray-600 text-sm">
                            Meningkatkan peran serta masyarakat Nagari dalam perencanaan, pelaksanaan, pengendalian dan
                            pemeliharaan pembangunan.
                        </p>
                    </div>
                    <div
                        class="text-center bg-white p-6 rounded-lg shadow-md border-b-4 border-green-500 hover:border-yellow-500">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Membangkitkan Daya dan Kemampuan Masyarakat
                        </h4>
                        <p class="text-gray-600 text-sm">
                            Membangkitkan daya dan kemampuan masyarakat Nagari untuk dapat berusaha sesuai dengan
                            keterampilan dan dukungan potensi Nagari.
                        </p>
                    </div>
                    <div
                        class="text-center bg-white p-6 rounded-lg shadow-md border-b-4 border-yellow-500 hover:border-green-500">
                        <div class="w-16 h-16 bg-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 21H3v-4m0 0l7-7m-7 7h7m0 0V7m0 14h7m0 0l-7-7m7 7V7M3 7v4m0 0L10 4m-7 7H3m0 0v-4m0 0L10 4">
                                </path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Mewujudkan Pemerintahan Profesional</h4>
                        <p class="text-gray-600 text-sm">
                            Mewujudkan Pemerintahan yang profesional sebagai pelayan masyarakat dan bukan sebagai penguasa.
                        </p>
                    </div>
                    <div
                        class="text-center bg-white p-6 rounded-lg shadow-md border-b-4 border-green-500 hover:border-yellow-500">
                        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1z"></path>
                            </svg>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Meningkatkan Peran Serta Masyarakat Perantau
                        </h4>
                        <p class="text-gray-600 text-sm">
                            Meningkatkan peran serta masyarakat perantau untuk menunjang pembangunan Nagari.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Kebijakan Section -->
            <div
                class="bg-white rounded-2xl p-8 md:p-12 shadow-lg border-b-4 border-transparent hover:border-yellow-400 mt-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Kebijakan</h3>
                    <div class="w-20 h-1 bg-green-600 mx-auto"></div>
                </div>

                <ul class="space-y-6 text-gray-700 text-lg leading-relaxed list-disc pl-5">
                    <li class="pl-2">Meningkatkan manajemen Pemerintahan Nagari.</li>
                    <li class="pl-2">Pelaksanaan pembangunan dengan pola pemberdayaan dan partisipasi aktif seluruh
                        komponen masyarakat dan restrukturisasi manajemen Pemerintahan Nagari.</li>
                    <li class="pl-2">Restrukturisasi perekonomian masyarakat berbasis ekonomi kerakyatan dengan
                        memunculkan wilayah pertumbuhan ekonomi dengan tetap menjaga kelestarian sumber daya alam dan
                        penyehatan lingkungan.</li>
                    <li class="pl-2">Nilai-nilai agama menjiwa dan mewarnai setiap prilaku dan sikap hidup masyarakat
                        Nagari di setiap bidang kehidupan.</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
