@extends('layouts.admin')

@section('title', 'Edit Profil')

@section('content')
<h1 class="text-2xl font-bold text-slate-900 mb-2">Edit Profil Perusahaan</h1>
<p class="text-sm text-slate-500 mb-6">Profil hanya dapat diperbarui (tanpa tambah atau hapus).</p>

<form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data"
      class="bg-white rounded-xl border border-slate-200 p-6 max-w-xl space-y-5">
    @csrf
    @method('PUT')

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Judul</label>
        <input type="text" name="judul" value="{{ old('judul', $profil->judul) }}"
               class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm" required>
        @error('judul') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Isi Profil</label>
        <textarea name="isi" rows="10"
                  class="w-full border border-slate-300 rounded-md px-3 py-2 text-sm" required>{{ old('isi', $profil->isi) }}</textarea>
        @error('isi') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="block text-sm font-medium text-slate-700 mb-1">Gambar</label>
        <img src="{{ $profil->gambar ? Storage::url($profil->gambar) : asset('images/profil-perusahaan.jpg') }}"
             class="w-24 h-24 object-cover rounded-md mb-2" alt="Gambar profil">
        <input type="file" name="gambar" accept="image/*" class="text-sm">
        <p class="text-xs text-slate-400 mt-1">Kosongkan kalau tidak mau ganti gambar.</p>
        @error('gambar') <p class="text-red-600 text-xs mt-1">{{ $message }}</p> @enderror
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md text-sm font-medium hover:bg-blue-700">
            Simpan Perubahan
        </button>
        <a href="{{ route('profil') }}" target="_blank"
           class="px-5 py-2 rounded-md text-sm text-slate-600 hover:bg-slate-100">Lihat Halaman</a>
    </div>
</form>
@endsection
