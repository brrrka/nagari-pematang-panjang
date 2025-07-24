@extends('layouts.admin')

@section('title', 'Edit UMKM')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Edit UMKM: {{ $umkm->nama }}</h2>
                <p class="text-gray-600">Perbarui informasi UMKM</p>
            </div>

            <form action="{{ route('admin.umkm.update', $umkm) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama UMKM *</label>
                        <input type="text" name="nama" id="nama"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('nama') border-red-300 @enderror"
                            value="{{ old('nama', $umkm->nama) }}" required>
                        @error('nama')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi *</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('deskripsi') border-red-300 @enderror"
                            required>{{ old('deskripsi', $umkm->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                        @if ($umkm->gambar)
                            <div class="mt-1 mb-3">
                                <img src="{{ Storage::url($umkm->gambar) }}" alt="{{ $umkm->nama }}"
                                    class="h-20 w-20 object-cover rounded">
                                <p class="text-sm text-gray-500 mt-1">Gambar saat ini</p>
                            </div>
                        @endif
                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-green-400 transition-colors">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="gambar"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-green-600 hover:text-green-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-green-500">
                                        <span>Upload gambar baru</span>
                                        <input id="gambar" name="gambar" type="file" class="sr-only"
                                            accept="image/*">
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">Kosongkan jika tidak ingin mengubah. PNG, JPG, GIF hingga
                                    2MB</p>
                            </div>
                        </div>
                        @error('gambar')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="whatsapp" class="block text-sm font-medium text-gray-700">Nomor WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" placeholder="628123456789"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('whatsapp') border-red-300 @enderror"
                            value="{{ old('whatsapp', $umkm->whatsapp) }}">
                        <p class="mt-1 text-sm text-gray-500">Format: 628123456789 (tanpa tanda +)</p>
                        @error('whatsapp')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Link Instagram</label>
                        <input type="url" name="instagram" id="instagram" placeholder="https://instagram.com/username"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 @error('instagram') border-red-300 @enderror"
                            value="{{ old('instagram', $umkm->instagram) }}">
                        @error('instagram')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="is_active" id="is_active" value="1"
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded"
                            {{ old('is_active', $umkm->is_active) ? 'checked' : '' }}>
                        <label for="is_active" class="ml-2 block text-sm text-gray-900">UMKM Aktif</label>
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-3">
                    <a href="{{ route('admin.umkm.index') }}"
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition-colors">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Preview gambar sebelum upload
        document.getElementById('gambar').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Hapus preview lama jika ada
                    const existingPreview = document.querySelector('.image-preview');
                    if (existingPreview) {
                        existingPreview.remove();
                    }

                    // Buat preview baru
                    const preview = document.createElement('div');
                    preview.className = 'image-preview mt-4';
                    preview.innerHTML = `
                <img src="${e.target.result}" class="max-w-xs max-h-48 rounded-lg shadow-md mx-auto">
                <p class="text-sm text-gray-500 text-center mt-2">Preview gambar baru</p>
            `;
                    document.querySelector('form').appendChild(preview);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
