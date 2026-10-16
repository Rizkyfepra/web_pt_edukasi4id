@extends('layouts.public')

@section('title', 'Artikel / Informasi Terkini')

@section('content')
  <main class="flex-1">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-2">Artikel / Informasi Terkini</h1>
      <p class="text-slate-500 mb-10">Berita terbaru, insight teknologi, dan informasi perusahaan.</p>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse ($daftarArtikel as $artikel)
          <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <div class="h-48 bg-slate-200 overflow-hidden relative">
              @if ($artikel->gambar)
                <img src="{{ Storage::url($artikel->gambar) }}" class="w-full h-full object-cover">
              @endif
              @if ($artikel->kategori)
                <span class="absolute top-3 left-3 text-xs font-medium text-white bg-blue-700 px-3 py-1 rounded-full">{{ $artikel->kategori }}</span>
              @endif
            </div>
            <div class="p-6">
              <p class="text-xs text-slate-400 mb-2">{{ $artikel->created_at->translatedFormat('d M Y') }}</p>
              <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $artikel->judul }}</h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ Str::limit($artikel->ringkasan, 100) }}</p>
              <a href="{{ route('artikel.show', $artikel) }}" class="text-sm font-medium text-blue-700 hover:text-blue-800">Baca Selengkapnya &rarr;</a>
            </div>
          </article>
        @empty
          <p class="text-slate-400 text-sm col-span-3">Belum ada artikel.</p>
        @endforelse
      </div>

      <div class="mt-10">{{ $daftarArtikel->links() }}</div>
    </div>
  </main>
@endsection
