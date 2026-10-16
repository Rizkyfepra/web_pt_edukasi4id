<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Perusahaan - PT Solusi Koneksi Anda</title>
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
    <section class="max-w-7xl mx-auto px-6 py-16 md:py-20 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <div>
        <h1 class="font-serif text-3xl md:text-4xl font-semibold text-slate-900 mb-4">Profil Perusahaan</h1>
        <p class="text-slate-600 leading-relaxed mb-4">
          PT Solusi Koneksi Anda berdedikasi menyediakan layanan konektivitas dan solusi teknologi
          yang inovatif, andal, dan berorientasi pada kebutuhan klien. Dengan tenaga profesional berpengalaman,
          kami siap mendampingi setiap langkah transformasi digital bisnis Anda.
        </p>
        <p class="text-slate-600 leading-relaxed">
          Kami berkomitmen membantu perusahaan mengembangkan usaha melalui infrastruktur jaringan yang kuat,
          layanan internet berkualitas, solusi cloud, serta managed IT service yang responsif dan terpercaya.
        </p>
      </div>
      <div>
        <img src="{{ asset('images/profil-perusahaan.jpg') }}" alt="Profil PT Solusi Koneksi Anda"
             class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-md">
      </div>
    </section>
  </main>

  @include('partials.footer')

</body>
</html>
