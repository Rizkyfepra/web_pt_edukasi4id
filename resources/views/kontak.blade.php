@extends('layouts.public')

@section('title', 'Kontak Kami')
@section('bodyClass', 'flex flex-col min-h-screen')

@section('content')
  <main class="flex-1 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-2">Kontak Kami</h1>
      <p class="text-slate-500 mb-10">Hubungi kami untuk informasi layanan dan kerja sama.</p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
          <h2 class="text-lg font-semibold text-slate-900 mb-6">Informasi Kontak</h2>
          <ul class="space-y-4 text-sm text-slate-600">
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-whatsapp text-base text-slate-700"></i>
              <span>+62 812 3456 7890</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-instagram text-base text-slate-700"></i>
              <span>@solusikoneksianda</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-facebook text-base text-slate-700"></i>
              <span>PT Solusi Koneksi Anda</span>
            </li>
            <li class="flex items-start gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-location-dot text-base text-slate-700 mt-1"></i>
              <span>Jl. Raya Pajajaran No. 88 F Kota Bogor 16153</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-solid fa-envelope text-base text-slate-700"></i>
              <span>info@solusikoneksianda.co.id</span>
            </li>
            <li class="flex items-center gap-3 border-l-2 border-blue-500 pl-3">
              <i class="fa-brands fa-youtube text-base text-slate-700"></i>
              <span>@solusikoneksianda</span>
            </li>
          </ul>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 p-8">
          <h2 class="text-lg font-semibold text-slate-900 mb-6">Lokasi Kami</h2>
          <div class="relative rounded-lg overflow-hidden h-64 md:h-80">
            <iframe
              src="https://maps.google.com/maps?q=Jl.+Raya+Pajajaran+No.+88+F+Kota+Bogor+16153&output=embed"
              class="w-full h-full border-0"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <a href="https://maps.google.com/?q=Jl.+Raya+Pajajaran+No.+88+F+Kota+Bogor+16153"
               target="_blank"
               class="absolute top-3 left-3 bg-white text-slate-900 text-sm font-medium px-3 py-2 rounded-md shadow hover:bg-slate-100 transition flex items-center gap-2">
              Buka di Maps <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
