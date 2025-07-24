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
                        <img src="{{ asset('images/logo-nagari.png') }}" alt="Logo Nagari Pematang Panjang"
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

                    <a href="{{ route('umkm.index') }}"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('umkm.*') ? 'text-green-600 bg-green-50' : '' }}">
                        UMKM
                    </a>
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
                        <img src="{{ asset('images/logo-nagari.png') }}" alt="Logo Nagari Pematang Panjang"
                            class="h-12 w-12 mr-4">
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
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="text-gray-300 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-green-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
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
        <a href="https://wa.me/6281234567890" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all duration-300 hover:scale-110 group">
            <svg class="w-6 h-6 group-hover:animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
            </svg>
            <div class="absolute -top-2 -right-2 w-4 h-4 bg-red-500 rounded-full animate-ping"></div>
        </a>
    </div>

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
