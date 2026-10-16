<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produk / Layanan - PT Solusi Koneksi Anda</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  body { font-family: 'Inter', sans-serif; }
  .font-serif { font-family: 'Playfair Display', serif; }
</style>
</head>
<body class="text-slate-800 antialiased flex flex-col min-h-screen bg-white">

  @include('partials.navbar')

  <main class="flex-1">
    <div class="max-w-7xl mx-auto px-6 py-16">
      <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-2">Produk / Layanan</h1>
      <p class="text-slate-500 mb-10">Solusi konektivitas dan teknologi untuk kebutuhan bisnis Anda.</p>

      <h2 class="text-xl font-semibold text-slate-900 mb-6">Layanan Utama</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-40 object-cover" src="{{ asset('images/layanan-jaringan.jpg') }}" alt="Jaringan & Infrastruktur">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800">Jaringan & Infrastruktur</h3>
          </div>
        </div>
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-40 object-cover" src="{{ asset('images/layanan-internet.jpg') }}" alt="Internet Dedicated">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800">Internet Dedicated</h3>
          </div>
        </div>
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-40 object-cover" src="{{ asset('images/layanan-cloud.jpg') }}" alt="Solusi Cloud">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800">Solusi Cloud</h3>
          </div>
        </div>
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition duration-300">
          <img class="w-full h-40 object-cover" src="{{ asset('images/layanan-it.jpg') }}" alt="Managed IT Service">
          <div class="p-5">
            <h3 class="font-bold text-lg text-gray-800">Managed IT Service</h3>
          </div>
        </div>
      </div>

      <h2 class="text-xl font-semibold text-slate-900 mb-6">Katalog Produk</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @forelse ($daftarProduk as $produk)
          <article class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
            <div class="h-56 bg-slate-200 overflow-hidden">
              @if ($produk->gambar)
                <img src="{{ Storage::url($produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-full object-cover">
              @endif
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $produk->nama }}</h3>
              <p class="text-slate-500 text-sm leading-relaxed mb-3">{{ Str::limit($produk->deskripsi, 100) }}</p>
              @if ($produk->harga)
                <span class="text-sm font-semibold text-slate-900">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
              @endif
            </div>
          </article>
        @empty
          <p class="text-slate-400 text-sm col-span-3">Belum ada produk yang ditambahkan. Kelola melalui halaman admin.</p>
        @endforelse
      </div>

      <div class="mt-10">
        {{ $daftarProduk->links() }}
      </div>
    </div>
  </main>

  @include('partials.footer')

</body>
</html>
