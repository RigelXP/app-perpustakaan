<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profil.show', ['user' => auth()->user()]);
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:8|confirmed',
        ], [
            'password_lama.required' => 'Password lama wajib diisi.',
            'password_baru.required' => 'Password baru wajib diisi.',
            'password_baru.min' => 'Password baru minimal 8 karakter.',
            'password_baru.confirmed' => 'Konfirmasi password baru tidak sama.',
        ]);

        $user = $request->user();

        if (! Hash::check($validated['password_lama'], $user->password)) {
            return back()->withErrors([
                'password_lama' => 'Password lama tidak cocok.',
            ]);
        }

        $user->update([
            'password' => Hash::make($validated['password_baru']),
        ]);

        return redirect()->route('profil.show')
            ->with('success', 'Password berhasil diganti.');
    }
}