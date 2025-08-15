{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="relative bg-gradient-to-r from-green-600 to-green-800 text-white overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-green-600/80 to-green-800/80"></div>

        <div class="absolute inset-0">
            <img src="{{ asset('images/pemandangan-pematang-panjang.jpg') }}" alt="Pemandangan Nagari Pematang Panjang"
                class="w-full h-full object-cover" style="filter: brightness(0.7);">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Selamat Datang di<br>
                    <span class="text-yellow-300">Nagari Pematang Panjang</span>
                </h1>
                <p class="text-xl md:text-2xl mb-8 opacity-95 max-w-3xl mx-auto">
                    Dataran tinggi yang memanjang dengan keindahan alam yang menawan
                    <br class="hidden md:block">
                    di Kecamatan Sijunjung, Kabupaten Sijunjung, Sumatera Barat
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('informasi.profil') }}"
                        class="bg-white text-green-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Tentang Nagari
                    </a>
                    <a href="{{ route('umkm.index') }}"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                        Jelajahi UMKM
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>

    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-4">
                        Keindahan Alam Nagari
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Dataran Tinggi yang <span class="text-green-600">Memanjang</span>
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Nagari Pematang Panjang mendapat namanya dari kondisi geografis yang unik - sebuah dataran tinggi
                        yang memanjang seperti pematang sawah. Dikelilingi oleh hamparan hijau perkebunan dan persawahan,
                        nagari ini menawarkan pemandangan yang memukau mata.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 bg-green-50 rounded-lg border-b-4 border-green-500">
                            <div class="text-2xl font-bold text-green-600 mb-1">2.775 HA</div>
                            <div class="text-sm text-gray-600">Luas Wilayah</div>
                        </div>
                        <div class="text-center p-4 bg-yellow-50 rounded-lg border-b-4 border-yellow-500">
                            <div class="text-2xl font-bold text-yellow-600 mb-1">6938</div>
                            <div class="text-sm text-gray-600">Penduduk</div>
                        </div>
                        <div class="text-center p-4 bg-green-50 rounded-lg border-b-4 border-green-500">
                            <div class="text-2xl font-bold text-green-600 mb-1">11</div>
                            <div class="text-sm text-gray-600">Jorong</div>
                        </div>
                        <div class="text-center p-4 bg-yellow-50 rounded-lg border-b-4 border-yellow-500">
                            <div class="text-2xl font-bold text-yellow-600 mb-1">160 M</div>
                            <div class="text-sm text-gray-600">Ketinggian (mdpl)</div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-yellow-300">
                        <img src="{{ asset('images/pemandanganpematangpanjang.jpg') }}"
                            alt="Pemandangan Sawah dan Pematang di Nagari Pematang Panjang"
                            class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 text-white">
                            <h3 class="text-xl font-semibold mb-1">Hamparan Sawah Pematang Panjang</h3>
                            <p class="text-sm opacity-90">Keindahan alam yang menjadi ciri khas nagari</p>
                        </div>
                    </div>

                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-green-200 rounded-full opacity-20"></div>
                    <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-yellow-200 rounded-full opacity-20"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mengapa Pematang Panjang?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Nagari yang memiliki potensi alam melimpah dan masyarakat yang gotong royong dalam membangun kemajuan
                    bersama
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="group text-center p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-transparent hover:border-yellow-400">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Lokasi Strategis</h3>
                    <p class="text-gray-600 leading-relaxed">Terletak di jalur strategis dengan akses mudah ke berbagai
                        daerah di Kabupaten Sijunjung</p>
                </div>

                <div
                    class="group text-center p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-transparent hover:border-yellow-400">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Masyarakat Produktif</h3>
                    <p class="text-gray-600 leading-relaxed">Didukung oleh masyarakat yang kreatif dan produktif dalam
                        mengembangkan UMKM lokal</p>
                </div>

                <div
                    class="group text-center p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-b-4 border-transparent hover:border-yellow-400">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Kekayaan Alam</h3>
                    <p class="text-gray-600 leading-relaxed">Memiliki potensi alam yang luar biasa dari pertanian hingga
                        wisata alam yang menawan</p>
                </div>
            </div>
        </div>
    </div>

    @if ($galleries->count() > 0)
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Galeri Foto</h2>
                        <p class="text-lg text-gray-600">Dokumentasi kegiatan dan keindahan Nagari Pematang Panjang</p>
                    </div>
                    <a href="{{ route('gallery.index') }}"
                        class="text-green-600 hover:text-green-700 font-semibold flex items-center group">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($galleries as $gallery)
                        <div
                            class="relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 group border-b-4 border-transparent hover:border-yellow-400">
                            <img src="{{ Storage::url($gallery->gambar) }}" alt="{{ $gallery->judul }}"
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                            <div
                                class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition-all duration-300">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-semibold text-lg mb-1">{{ $gallery->judul }}</h3>
                                @if ($gallery->deskripsi)
                                    <p class="text-sm opacity-90">{{ Str::limit($gallery->deskripsi, 60) }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif


    @if ($articles->count() > 0)
        <div class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Artikel & Berita Terbaru</h2>
                        <p class="text-lg text-gray-600">Informasi terkini seputar kegiatan dan perkembangan nagari</p>
                    </div>
                    <a href="{{ route('articles.index') }}"
                        class="text-green-600 hover:text-green-700 font-semibold flex items-center group">
                        Lihat Semua
                        <svg class="w-5 h-5 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($articles as $article)
                        <article
                            class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border hover:-translate-y-2 group border-b-4 border-transparent hover:border-yellow-400">
                            @if ($article->gambar)
                                <div class="relative overflow-hidden rounded-t-xl">
                                    <img src="{{ Storage::url($article->gambar) }}" alt="{{ $article->judul }}"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                            @endif
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <span
                                        class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium uppercase">
                                        {{ $article->kategori }}
                                    </span>
                                    <span class="mx-2">•</span>
                                    <time>{{ $article->created_at->diffForHumans() }}</time>
                                </div>
                                <h3
                                    class="text-xl font-semibold text-gray-900 mb-3 line-clamp-2 group-hover:text-green-600 transition-colors">
                                    <a href="{{ route('articles.show', $article->slug) }}">
                                        {{ $article->judul }}
                                    </a>
                                </h3>
                                <p class="text-gray-600 line-clamp-3 mb-4">
                                    {{ Str::limit(strip_tags($article->konten), 120) }}
                                </p>
                                <a href="{{ route('articles.show', $article->slug) }}"
                                    class="text-green-600 hover:text-green-700 font-semibold transition-colors">
                                    Baca Selengkapnya →
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="py-16 bg-gradient-to-r from-green-600 to-green-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Jelajahi Lebih Dalam</h2>
            <p class="text-xl mb-8 opacity-90 max-w-2xl mx-auto">
                Temukan keunikan dan potensi Nagari Pematang Panjang melalui peta interaktif dan informasi lengkap
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('peta.index') }}"
                    class="inline-flex items-center bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    </svg>
                    Lihat Peta Interaktif
                </a>
                <a href="{{ route('informasi.visi-misi') }}"
                    class="inline-flex items-center border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                        </path>
                    </svg>
                    Visi & Misi
                </a>
            </div>
        </div>
    </div>
@endsection
