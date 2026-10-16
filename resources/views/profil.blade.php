@extends('layouts.public')

@section('title', $profil->judul)

@section('content')
  <main class="flex-1">
    <section class="max-w-7xl mx-auto px-6 py-16 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div>
        <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-4">{{ $profil->judul }}</h1>
        <p class="text-slate-600 leading-relaxed whitespace-pre-line">{{ $profil->isi }}</p>
      </div>
      <div>
        <img src="{{ $profil->gambar ? Storage::url($profil->gambar) : asset('images/profil-perusahaan.jpg') }}"
             alt="{{ $profil->judul }}"
             class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-md">
      </div>
    </section>
  </main>
@endsection
