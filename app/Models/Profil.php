<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';

    protected $fillable = [
        'judul',
        'isi',
        'gambar',
    ];

    /** Ambil baris profil tunggal (buat otomatis jika belum ada). */
    public static function singleton(): self
    {
        return static::query()->first() ?? static::create([
            'judul' => 'Profil Perusahaan',
            'isi'   => "PT Solusi Koneksi Anda berdedikasi menyediakan layanan konektivitas dan solusi teknologi yang inovatif, andal, dan berorientasi pada kebutuhan klien. Dengan tenaga profesional berpengalaman, kami siap mendampingi setiap langkah transformasi digital bisnis Anda.\n\nKami berkomitmen membantu perusahaan mengembangkan usaha melalui infrastruktur jaringan yang kuat, layanan internet berkualitas, solusi cloud, serta managed IT service yang responsif dan terpercaya.",
            'gambar' => null,
        ]);
    }
}
