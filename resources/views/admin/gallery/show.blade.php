{{-- resources/views/admin/gallery/show.blade.php --}}
@extends('layouts.admin')

@section('title', 'Detail Foto')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            @if ($gallery->gambar)
                <img src="{{ Storage::url($gallery->gambar) }}" alt="{{ $gallery->judul }}" class="w-full h-96 object-cover">
            @endif

            <div class="p-6">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $gallery->judul }}</h2>
                        <span class="text-sm text-gray-500">Ditambahkan:
                            {{ $gallery->created_at->format('d F Y, H:i') }}</span>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('gallery.index') }}" target="_blank"
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-blue-700 transition-colors">
                            Lihat di Website
                        </a>
                        <a href="{{ route('admin.gallery.edit', $gallery) }}"
                            class="bg-green-600 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-700 transition-colors">
                            Edit
                        </a>
                    </div>
                </div>

                @if ($gallery->deskripsi)
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Deskripsi</h3>
                        <p class="text-gray-700 leading-relaxed">{{ $gallery->deskripsi }}</p>
                    </div>
                @endif

                <div class="bg-gray-50 p-4 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Informasi File</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="font-medium text-gray-900">Nama File:</span>
                            <span class="text-gray-600 ml-2">{{ basename($gallery->gambar) }}</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-900">Ukuran:</span>
                            <span class="text-gray-600 ml-2">
                                @if (Storage::disk('public')->exists($gallery->gambar))
                                    {{ number_format(Storage::disk('public')->size($gallery->gambar) / 1024, 2) }} KB
                                @else
                                    Tidak diketahui
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('admin.gallery.index') }}"
                class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition-colors">
                ← Kembali ke Galeri
            </a>
            <form action="{{ route('admin.gallery.destroy', $gallery) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition-colors"
                    onclick="return confirm('Yakin ingin menghapus artikel ini? Tindakan ini tidak dapat dibatalkan.')">
                    Hapus Artikel
                </button>
            </form>
        </div>
    </div>
@endsection
