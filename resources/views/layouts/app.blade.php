{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Website resmi Nagari Pematang Panjang, Kecamatan Sijunjung, Kabupaten Sijunjung, Sumatera Barat. Informasi lengkap tentang profil nagari, UMKM, galeri, dan berita terkini.">
    <meta name="keywords" content="Nagari Pematang Panjang, Sijunjung, Sumatera Barat, UMKM, Galeri, Pemerintahan Nagari">
    <title>@yield('title', 'Beranda') - Nagari Pematang Panjang</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-nagari.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <!-- Logo Nagari -->
                        <img src="{{ asset('images/pematangpanjang.jpg') }}" alt="Logo Nagari Pematang Panjang"
                            class="h-10 w-10 mr-3">
                        <div>
                            <span class="text-xl font-bold text-green-600">Nagari Pematang Panjang</span>
                            <div class="text-xs text-gray-500 hidden sm:block">Kec. Sijunjung, Kab. Sijunjung</div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ route('home') }}"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'text-green-600 bg-green-50' : '' }}">
                        Beranda
                    </a>

                    <!-- Dropdown Informasi Nagari -->
                    <div class="relative group">
                        <button
                            class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium flex items-center transition-colors {{ request()->routeIs('informasi.*') ? 'text-green-600 bg-green-50' : '' }}">
                            Informasi Nagari
                            <svg class="ml-1 h-4 w-4 transform group-hover:rotate-180 transition-transform duration-200"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div
                            class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-1">
                            <div class="py-2">
                                <a href="{{ route('informasi.profil') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Profil
                                    Lengkap</a>
                                <div class="border-t my-1"></div>
                                <a href="{{ route('informasi.visi-misi') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Visi
                                    & Misi</a>
                                <a href="{{ route('informasi.struktur-organisasi') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-green-50 hover:text-green-600 transition-colors">Struktur
                                    Organisasi</a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('gallery.index') }}"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('gallery.*') ? 'text-green-600 bg-green-50' : '' }}">
                        Galeri
                    </a>
                    <a href="{{ route('articles.index') }}"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('articles.*') ? 'text-green-600 bg-green-50' : '' }}">
                        Artikel & Berita
                    </a>
                    <a href="{{ route('peta.index') }}"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('peta.*') ? 'text-green-600 bg-green-50' : '' }}">
                        Peta
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button type="button"
                        class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 transition-colors">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path class="hamburger-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path class="hamburger-close hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-menu hidden md:hidden border-t bg-white">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium transition-colors">Beranda</a>

                <div class="space-y-1">
                    <button
                        class="mobile-dropdown-btn text-gray-700 hover:text-green-600 w-full text-left px-3 py-2 rounded-md text-base font-medium flex justify-between items-center transition-colors">
                        Informasi Nagari
                        <svg class="h-4 w-4 transform transition-transform duration-200" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1">
                        <a href="{{ route('informasi.profil') }}"
                            class="block px-3 py-2 text-sm text-gray-600 hover:text-green-600 transition-colors">📖
                            Profil Lengkap</a>
                        <a href="{{ route('informasi.visi-misi') }}"
                            class="block px-3 py-2 text-sm text-gray-600 hover:text-green-600 transition-colors">🎯 Visi
                            & Misi</a>
                        <a href="{{ route('informasi.struktur-organisasi') }}"
                            class="block px-3 py-2 text-sm text-gray-600 hover:text-green-600 transition-colors">👥
                            Struktur Organisasi</a>
                    </div>
                </div>

                <a href="{{ route('umkm.index') }}"
                    class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium transition-colors">UMKM</a>
                <a href="{{ route('gallery.index') }}"
                    class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium transition-colors">Galeri</a>
                <a href="{{ route('articles.index') }}"
                    class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium transition-colors">Artikel
                    & Berita</a>
                <a href="{{ route('peta.index') }}"
                    class="text-gray-700 hover:text-green-600 block px-3 py-2 rounded-md text-base font-medium transition-colors">Peta</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo dan Info Nagari -->
                <div class="md:col-span-2">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/pematangpanjangbersih.png') }}" alt="Logo Nagari Pematang Panjang"
                            class="h-12 mr-4">
                        <div>
                            <span class="text-xl font-bold text-green-400">Nagari Pematang Panjang</span>
                            <p class="text-gray-300 text-sm">Kecamatan Sijunjung, Kabupaten Sijunjung</p>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-4 leading-relaxed">
                        Nagari yang terletak di dataran tinggi yang memanjang dengan potensi alam yang luar biasa
                        dan masyarakat yang gotong royong dalam membangun kemajuan bersama.
                    </p>
                    <div class="flex space-x-4">
                        <!-- WhatsApp -->
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="text-gray-300 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="https://instagram.com/nagaripematangpanjang" target="_blank"
                            class="text-gray-300 hover:text-pink-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="https://tiktok.com/@nagaripematangpanjang" target="_blank"
                            class="text-gray-300 hover:text-red-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-.88-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Menu Utama -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-green-400">Menu Utama</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-green-400 transition-colors">Beranda</a></li>
                        <li><a href="{{ route('informasi.profil') }}"
                                class="text-gray-300 hover:text-green-400 transition-colors">Profil Nagari</a></li>
                        <li><a href="{{ route('umkm.index') }}"
                                class="text-gray-300 hover:text-green-400 transition-colors">UMKM</a></li>
                        <li><a href="{{ route('gallery.index') }}"
                                class="text-gray-300 hover:text-green-400 transition-colors">Galeri</a></li>
                        <li><a href="{{ route('articles.index') }}"
                                class="text-gray-300 hover:text-green-400 transition-colors">Artikel & Berita</a></li>
                        <li><a href="{{ route('peta.index') }}"
                                class="text-gray-300 hover:text-green-400 transition-colors">Peta Nagari</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-green-400">Kontak</h3>
                    <div class="space-y-3">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-green-400 mr-2 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                            </svg>
                            <p class="text-gray-300 text-sm">Kantor Wali Nagari Pematang Panjang, Kec. Sijunjung</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <p class="text-gray-300 text-sm">info@pematangpanjang.id</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <p class="text-gray-300 text-sm">(0754) 123456</p>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                            <p class="text-gray-300 text-sm">+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-300 text-sm">&copy; {{ date('Y') }} Nagari Pematang Panjang. All rights
                        reserved.</p>
                    <div class="flex items-center mt-4 md:mt-0">
                        <span class="text-gray-400 text-xs mr-2">Developed by</span>
                        <a href="#"
                            class="flex items-center text-gray-300 hover:text-green-400 transition-colors group">
                            <img src="{{ asset('images/logo-kkn.png') }}" alt="Logo KKN"
                                class="h-5 w-5 mr-2 group-hover:scale-110 transition-transform">
                            <span class="text-xs font-medium">KKN Pematang Panjang 2025</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-50">
        <div class="relative">
            <!-- Animasi ping di belakang button -->
            <div class="absolute inset-0 rounded-full bg-green-500 animate-ping opacity-75"></div>
            <!-- Button WhatsApp - Fixed dengan aspect-square dan dimensi tetap -->
            <a href="https://wa.me/6281234567890" target="_blank"
                class="relative flex items-center justify-center w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition-all duration-300 hover:scale-110 group">
                <svg class="w-7 h-7 group-hover:animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                </svg>
            </a>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Enhanced JavaScript -->
    <script>
        // Mobile menu toggle with animation
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        const hamburgerOpen = document.querySelector('.hamburger-open');
        const hamburgerClose = document.querySelector('.hamburger-close');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            hamburgerOpen.classList.toggle('hidden');
            hamburgerClose.classList.toggle('hidden');
        });

        // Mobile dropdown toggle with animation
        const mobileDropdownBtn = document.querySelector('.mobile-dropdown-btn');
        const mobileDropdownContent = document.querySelector('.mobile-dropdown-content');
        const dropdownIcon = mobileDropdownBtn.querySelector('svg');

        mobileDropdownBtn.addEventListener('click', function() {
            mobileDropdownContent.classList.toggle('hidden');
            dropdownIcon.classList.toggle('rotate-180');
        });

        // Smooth scroll for anchor links
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

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = document.querySelector('nav').contains(event.target);
            if (!isClickInsideNav && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                hamburgerOpen.classList.remove('hidden');
                hamburgerClose.classList.add('hidden');
            }
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 100) {
                navbar.classList.add('shadow-xl');
            } else {
                navbar.classList.remove('shadow-xl');
            }
        });
    </script>
</body>

</html>
