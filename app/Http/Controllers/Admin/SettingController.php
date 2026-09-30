<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function index(Request $request): View
    {
        $tab = $request->string('tab')->toString() ?: 'profile';

        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();

        return view('admin.settings.index', compact('tab', 'settings'));
    }

    public function updateProfile(Request $request): RedirectResponse
    {
        $user = $request->user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:50', Rule::unique('users')->ignore($user->id)],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ]);

        $user->update($validated);

        return redirect()->route('admin.settings.index', ['tab' => 'profile'])
            ->with('success', 'Profil admin berhasil diperbarui!');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.settings.index', ['tab' => 'profile'])
            ->with('success', 'Kata sandi admin berhasil diganti!');
    }

    public function updateSiteSettings(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'site_name' => ['nullable', 'string', 'max:255'],
            'site_tagline' => ['nullable', 'string', 'max:255'],
            'site_phone' => ['nullable', 'string', 'max:50'],
            'site_whatsapp' => ['nullable', 'string', 'max:50'],
            'site_email' => ['nullable', 'string', 'email', 'max:255'],
            'site_address' => ['nullable', 'string'],
            'site_instagram' => ['nullable', 'string', 'max:255'],
            'site_facebook' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
        ]);

        foreach ($validated as $key => $val) {
            SiteSetting::set($key, $val);
        }

        return redirect()->route('admin.settings.index', ['tab' => 'site'])
            ->with('success', 'Pengaturan website berhasil disimpan!');
    }
}
