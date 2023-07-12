<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    //Update informasi akun
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('pengaturan.index')->with('success-informasi', 'Informasi akun berhasil diperbarui.');
    }


    /**
     * Update the user's profile information foto.
     */
    public function updatePhoto(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if ($request->hasFile('foto')) {
            // Mengunggah file foto profil
            $file = $request->file('foto');
            $foto = $file->store('profile-fotos');
            $user->update(['foto' => $foto]);
        }

        // Logika lain yang diperlukan setelah update foto profil
        return redirect()->back()->with('success', 'Foto profil berhasil diperbarui.');
    }

    /**
     * Delete the user's profile information foto.
     */
    public function deletePhoto()
    {
        $user = User::find(auth()->user()->id);
        $user->update(['foto' => null]);
        return redirect()->back()->with('success', 'Foto profil berhasil dihapus.');
    }
}
