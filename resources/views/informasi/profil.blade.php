{{-- resources/views/informasi/profil.blade.php --}}
@extends('layouts.app')

@section('title', 'Profil Nagari')

@section('content')
    <div class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Profil <span class="text-yellow-300">Nagari</span></h1>
                <p class="text-xl opacity-90">Nagari Pematang Panjang</p>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                <div class="lg:col-span-1">
                    <div
                        class="bg-white rounded-lg shadow-md p-6 sticky top-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Menu Profil</h3>
                        <nav class="space-y-2">
                            <a href="#sejarah"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Sejarah
                            </a>
                            <a href="#batas-wilayah"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Batas Wilayah
                            </a>
                            <a href="#jorong"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Jorong
                            </a>
                            <a href="#kondisi-geografis"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Kondisi Geografis
                            </a>
                            <a href="#kondisi-nagari"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Kondisi Nagari
                            </a>
                            <a href="#topografi"
                                class="block py-2 px-3 text-gray-700 hover:bg-green-50 hover:text-green-600 rounded transition-colors">
                                Topografi
                            </a>
                        </nav>
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-12">

                    <section
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Profil Umum Nagari Pematang Panjang</h2>

                        <div class="prose max-w-none mb-8">
                            <p class="text-gray-600 leading-relaxed">
                                Nagari Pematang Panjang adalah salah satu nagari yang terletak di Kecamatan Sijunjung,
                                Kabupaten Sijunjung, Provinsi Sumatera Barat. Nagari ini memiliki keunikan tersendiri
                                dengan potensi alam yang melimpah dan masyarakat yang ramah serta berbudaya.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-green-50 p-4 rounded-lg text-center border-b-4 border-green-500">
                                <h4 class="font-semibold text-green-800 mb-2">Luas Wilayah</h4>
                                <p class="text-green-700 text-xl font-bold">2.775 HA</p>
                            </div>
                            <div class="bg-yellow-50 p-4 rounded-lg text-center border-b-4 border-yellow-500">
                                <h4 class="font-semibold text-yellow-800 mb-2">Jumlah Penduduk</h4>
                                <p class="text-yellow-700 text-xl font-bold">6938 jiwa</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg text-center border-b-4 border-green-500">
                                <h4 class="font-semibold text-green-800 mb-2">Jumlah KK</h4>
                                <p class="text-green-700 text-xl font-bold">2009 KK</p>
                            </div>
                            <div class="bg-yellow-50 p-4 rounded-lg text-center border-b-4 border-yellow-500">
                                <h4 class="font-semibold text-yellow-800 mb-2">Jumlah Jorong</h4>
                                <p class="text-yellow-700 text-xl font-bold">11 Jorong</p>
                            </div>
                        </div>
                    </section>

                    <section id="sejarah"
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah</h2>

                        <div class="bg-green-50 border-l-4 border-green-600 p-6 mb-8">
                            <p class="text-green-800 italic">
                                "Nagari Pematang Panjang berjarak 15 KM dari ibukota Kabupaten yang merupakan salah satu
                                Nagari dalam kecamatan Sijunjung."
                            </p>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">Sejarah Ringkas Nagari</h3>
                                <ul class="list-disc pl-5 text-gray-600 leading-relaxed space-y-2">
                                    <li>Nagari Pematang Panjang berjarak 15 KM dari ibukota Kabupaten yang merupakan salah
                                        satu Nagari dalam kecamatan Sijunjung.</li>
                                    <li>Sebelum kembali ke sistem Pemerintahan Nagari, Nagari Pematang Panjang merupakan
                                        sistem Pemerintahan Desa.</li>
                                    <li>Nagari Pematang Panjang ditetapkan dengan Perda Kabupaten Sawahlunto Sijunjung Tahun
                                        2001.</li>
                                    <li>Sebelum dimekarkan, Nagari terdiri dari 7 Jorong dan pada Tahun 2008 dimekarkan
                                        menjadi 10 jorong.</li>
                                    <li>Pada tahun 2013, salah satu Jorong dimekarkan, maka sampai saat ini menjadi 11
                                        jorong, dan sekaligus ada perubahan nama jorong.</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <section id="batas-wilayah"
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Batas Wilayah</h2>

                        <p class="text-gray-600 leading-relaxed mb-8">
                            Nagari Pematang Panjang terletak di Kecamatan Sijunjung, Kabupaten Sijunjung,
                            Provinsi Sumatera Barat dengan batas-batas wilayah sebagai berikut:
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-red-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-red-800">Sebelah Utara</h3>
                                </div>
                                <p class="text-red-700">Nagari Muaro</p>
                            </div>

                            <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-blue-800">Sebelah Selatan</h3>
                                </div>
                                <p class="text-blue-700">Nagari Lalan</p>
                            </div>

                            <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-green-800">Sebelah Barat</h3>
                                </div>
                                <p class="text-green-700">Nagari Kandang Baru, Nagari Koto Tuo</p>
                            </div>

                            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <div class="flex items-center mb-3">
                                    <svg class="w-6 h-6 text-yellow-500 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-yellow-800">Sebelah Timur</h3>
                                </div>
                                <p class="text-yellow-700">Nagari Sijunjung</p>
                            </div>
                        </div>
                    </section>

                    <section id="jorong"
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Jorong</h2>

                        <p class="text-gray-600 leading-relaxed mb-8">
                            Nagari Pematang Panjang terdiri dari 11 (sebelas) jorong sebagai pembagian wilayah
                            administratif terkecil. Setiap jorong memiliki karakteristik dan potensi yang unik
                            serta dipimpin oleh seorang Kepala Jorong.
                        </p>

                        <div class="space-y-6">
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-green-900 mb-4">Jorong Koran</h3>
                                <p class="text-green-700">Kepala Jorong: Mustaben</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-yellow-900 mb-4">Jorong Kambuik Koman</h3>
                                <p class="text-yellow-700">Kepala Jorong: Erisman</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-green-900 mb-4">Jorong Koto Tangah</h3>
                                <p class="text-green-700">Kepala Jorong: Wandri Eka Putra</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-yellow-900 mb-4">Jorong Parak Gadang</h3>
                                <p class="text-yellow-700">Kepala Jorong: Fani Akbar</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-green-900 mb-4">Jorong Pale</h3>
                                <p class="text-green-700">Kepala Jorong: Dulmadi</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-yellow-900 mb-4">Jorong Duri</h3>
                                <p class="text-yellow-700">Kepala Jorong: Endri Junaidi</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-green-900 mb-4">Jorong Pondok Jago</h3>
                                <p class="text-green-700">Kepala Jorong: Sardiman Edi</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-yellow-900 mb-4">Jorong Kalumpang</h3>
                                <p class="text-yellow-700">Kepala Jorong: Zul Abdissalam</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-green-900 mb-4">Jorong Koman Kacik</h3>
                                <p class="text-green-700">Kepala Jorong: Yusril Junaidi</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-yellow-50 to-yellow-100 border-l-4 border-yellow-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-yellow-900 mb-4">Jorong Limau Sundai</h3>
                                <p class="text-yellow-700">Kepala Jorong: Burman Idrus</p>
                            </div>
                            <div
                                class="bg-gradient-to-r from-green-50 to-green-100 border-l-4 border-green-500 p-6 rounded-r-lg">
                                <h3 class="text-xl font-semibold text-green-900 mb-4">Jorong Sitampung</h3>
                                <p class="text-green-700">Kepala Jorong: Heriyanto</p>
                            </div>
                        </div>
                    </section>

                    <section id="kondisi-geografis"
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Kondisi Geografis</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Ketinggian Wilayah</h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="bg-green-50 border border-green-200 p-4 rounded-lg text-center">
                                        <h4 class="font-semibold text-green-900 mb-2">Terendah</h4>
                                        <p class="text-2xl font-bold text-green-600">160M</p>
                                        <p class="text-green-700 text-sm">di atas permukaan laut</p>
                                    </div>
                                    <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg text-center">
                                        <h4 class="font-semibold text-yellow-900 mb-2">Suhu Udara Rata-Rata</h4>
                                        <p class="text-2xl font-bold text-yellow-600">30-36°C</p>
                                        <p class="text-yellow-700 text-sm">rata-rata</p>
                                    </div>
                                    <div class="bg-red-50 border border-red-200 p-4 rounded-lg text-center">
                                        <h4 class="font-semibold text-red-900 mb-2">Tofografi</h4>
                                        <p class="text-2xl font-bold text-red-600">Dataran Rendah</p>
                                        <p class="text-red-700 text-sm">Nagari Pematang Panjang</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Iklim dan Cuaca</h3>
                                <div class="bg-gray-50 p-6 rounded-lg border-b-4 border-gray-400">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-3">Tipe Iklim</h4>
                                            <p class="text-gray-600 mb-4">Iklim tropis dengan dua musim utama</p>
                                            <ul class="text-gray-600 space-y-2">
                                                <li class="flex items-center">
                                                    <svg class="w-4 h-4 text-blue-500 mr-2" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z">
                                                        </path>
                                                    </svg>
                                                    Musim Hujan: Oktober - Maret
                                                </li>
                                                <li class="flex items-center">
                                                    <svg class="w-4 h-4 text-yellow-500 mr-2" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                                        </path>
                                                    </svg>
                                                    Musim Kemarau: April - September
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold text-gray-900 mb-3">Curah Hujan</h4>
                                            <div class="space-y-3">
                                                <div>
                                                    <div class="flex justify-between mb-1">
                                                        <span class="text-sm text-gray-600">Curah Hujan Tahunan</span>
                                                        <span class="text-sm font-medium text-gray-900">Tidak tersedia
                                                            spesifik</span>
                                                    </div>
                                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 85%">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="kondisi-nagari"
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Kondisi Nagari</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Fasilitas Umum</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                    <div class="bg-blue-50 p-4 rounded-lg text-center border-b-4 border-blue-500">
                                        <svg class="w-8 h-8 text-blue-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-blue-900">Kantor Wali Nagari</h4>
                                    </div>
                                    <div class="bg-green-50 p-4 rounded-lg text-center border-b-4 border-green-500">
                                        <svg class="w-8 h-8 text-green-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-green-900">Sekolah</h4>
                                    </div>
                                    <div class="bg-red-50 p-4 rounded-lg text-center border-b-4 border-red-500">
                                        <svg class="w-8 h-8 text-red-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-red-900">Puskesmas Pembantu</h4>
                                    </div>
                                    <div class="bg-purple-50 p-4 rounded-lg text-center border-b-4 border-purple-500">
                                        <svg class="w-8 h-8 text-purple-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                                        </svg>
                                        <h4 class="font-semibold text-purple-900">Masjid</h4>
                                    </div>
                                    <div class="bg-yellow-50 p-4 rounded-lg text-center border-b-4 border-yellow-500">
                                        <svg class="w-8 h-8 text-yellow-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M8 11v6h8v-6M8 11H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2v-6a2 2 0 00-2-2h-2">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-yellow-900">Pasar</h4>
                                    </div>
                                    <div class="bg-indigo-50 p-4 rounded-lg text-center border-b-4 border-indigo-500">
                                        <svg class="w-8 h-8 text-indigo-600 mx-auto mb-2" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7">
                                            </path>
                                        </svg>
                                        <h4 class="font-semibold text-indigo-900">Jalan Lintas Sumatera</h4>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Potensi Unggulan</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="bg-green-50 p-6 rounded-lg border-b-4 border-green-500">
                                        <h4 class="font-semibold text-green-900 mb-3">Sektor Pertanian</h4>
                                        <ul class="text-green-700 space-y-2">
                                            <li>• Tanaman pangan (Padi, Palawija)</li>
                                            <li>• Perkebunan (Coklat/Kakao, Karet)</li>
                                        </ul>
                                    </div>
                                    <div class="bg-yellow-50 p-6 rounded-lg border-b-4 border-yellow-500">
                                        <h4 class="font-semibold text-yellow-900 mb-3">Sub Sektor Kerajinan/Industri Kecil
                                        </h4>
                                        <ul class="text-yellow-700 space-y-2">
                                            <li>• Tas Rajut</li>
                                            <li>• Kue/Kerupuk</li>
                                            <li>• Batu Bata</li>
                                            <li>• Kue Ringan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="topografi"
                        class="bg-white rounded-lg shadow-md p-8 border-b-4 border-transparent hover:border-yellow-400">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Topografi</h2>

                        <div class="space-y-8">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Gambaran Umum</h3>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Topografi adalah gambaran tentang tingkat kemiringan dan ketinggian tanah dari permukaan
                                    laut.
                                    Kondisi kemiringan tanah merupakan salah satu faktor yang sangat mempengaruhi kesesuaian
                                    lahan untuk syarat tumbuh suatu tanaman, karena dengan kemiringan tanah yang cukup besar
                                    akan
                                    sangat mempengaruhi kontinuitas kesuburan tanah akibat daya rusak aliran air (tingkat
                                    erosi)
                                    terhadap permukaan tanah cukup tinggi.
                                </p>
                                <p class="text-gray-600 leading-relaxed mb-6">
                                    Kondisi Nagari Pematang Panjang sangat potensial untuk dikembangkan sebagai lahan
                                    pertanian dan
                                    perkebunan, karena tingkat kesuburan lahan pertanian dan perkebunan di Nagari Pematang
                                    Panjang
                                    sangat baik. Disamping budidaya pertanian dan perkebunan rakyat yang dilakukan
                                    masyarakat
                                    masih tergolong tradisionil dan semi teknis juga masih ditemukan adanya lahan tidur yang
                                    akan
                                    ditanamai coklat (cocao) dan karet yang dapat ditingkatkan sebagai lahan produktif untuk
                                    masa
                                    yang akan datang.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-4">Jenis Tanah Dominan</h3>
                                <div class="space-y-4">
                                    <div class="bg-yellow-50 border border-yellow-200 p-4 rounded-lg">
                                        <h4 class="font-semibold text-yellow-900 mb-2">Tanah Subur</h4>
                                        <p class="text-yellow-700 text-sm">
                                            Nagari Pematang Panjang memiliki tanah yang sangat baik dan subur, ideal untuk
                                            pertanian.
                                        </p>
                                    </div>
                                    <div class="bg-green-50 border border-green-200 p-4 rounded-lg">
                                        <h4 class="font-semibold text-green-900 mb-2">Potensi Lahan Tidur</h4>
                                        <p class="text-green-700 text-sm">
                                            Ditemukan lahan tidur yang berpotensi ditanami coklat (kakao) dan karet untuk
                                            peningkatan produktivitas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>

    <style>
        .brown-50 {
            background-color: #fdf8f6;
        }

        .brown-600 {
            color: #92400e;
        }

        .brown-700 {
            color: #78350f;
        }

        .brown-800 {
            color: #451a03;
        }
    </style>

    <script>
        // Smooth scroll untuk navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Highlight active section in navigation
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('bg-green-50', 'text-green-600');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('bg-green-50', 'text-green-600');
                }
            });
        });
    </script>
@endsection
