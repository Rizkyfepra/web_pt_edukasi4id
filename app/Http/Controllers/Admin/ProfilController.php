<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function edit()
    {
        $profil = Profil::singleton();

        return view('admin.profil.edit', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = Profil::singleton();

        $validated = $request->validate([
            'judul'  => 'required|string|max:255',
            'isi'    => 'required|string',
            'gambar' => 'nullable|image|max:9048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($profil->gambar) {
                Storage::disk('public')->delete($profil->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('profil', 'public');
        }

        $profil->update($validated);

        return redirect()->route('admin.profil.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
