<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvitationProject;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class InvitationController extends Controller
{
    public function index(Request $request): View
    {
        $query = InvitationProject::query();

        if ($search = $request->string('search')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('groom_name', 'like', "%{$search}%")
                    ->orWhere('bride_name', 'like', "%{$search}%")
                    ->orWhere('slug', 'like', "%{$search}%")
                    ->orWhere('location_name', 'like', "%{$search}%")
                    ->orWhere('client_phone', 'like', "%{$search}%");
            });
        }

        if ($status = $request->string('status')->toString()) {
            if ($status !== 'all') {
                $query->where('status', $status);
            }
        }

        if ($eventType = $request->string('event_type')->toString()) {
            if ($eventType !== 'all') {
                $query->where('event_type', $eventType);
            }
        }

        $invitations = $query->latest()->paginate(10)->withQueryString();

        $stats = [
            'total' => InvitationProject::count(),
            'active' => InvitationProject::where('status', 'active')->count(),
            'draft' => InvitationProject::where('status', 'draft')->count(),
            'total_rsvp' => InvitationProject::sum('rsvp_count'),
        ];

        return view('admin.invitations.index', compact('invitations', 'stats'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'groom_name' => ['required', 'string', 'max:255'],
            'bride_name' => ['nullable', 'string', 'max:255'],
            'client_phone' => ['nullable', 'string', 'max:50'],
            'event_type' => ['required', 'string', 'max:100'],
            'package_name' => ['required', 'string', 'max:100'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:invitation_projects,slug'],
            'custom_domain' => ['nullable', 'string', 'max:255'],
            'event_date' => ['nullable', 'date'],
            'location_name' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'rsvp_count' => ['nullable', 'integer', 'min:0'],
            'music_title' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:active,draft,completed,expired'],
            'notes' => ['nullable', 'string'],
        ]);

        if (empty($validated['slug'])) {
            $baseSlug = Str::slug($validated['groom_name'].($validated['bride_name'] ? '-'.$validated['bride_name'] : ''));
            $slug = $baseSlug;
            $counter = 1;
            while (InvitationProject::where('slug', $slug)->exists()) {
                $slug = "{$baseSlug}-{$counter}";
                $counter++;
            }
            $validated['slug'] = $slug;
        } else {
            $validated['slug'] = Str::slug($validated['slug']);
        }

        InvitationProject::create($validated);

        return redirect()->route('admin.invitations.index')->with('success', 'Undangan digital baru berhasil dibuat!');
    }

    public function update(Request $request, InvitationProject $invitation): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'groom_name' => ['required', 'string', 'max:255'],
            'bride_name' => ['nullable', 'string', 'max:255'],
            'client_phone' => ['nullable', 'string', 'max:50'],
            'event_type' => ['required', 'string', 'max:100'],
            'package_name' => ['required', 'string', 'max:100'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('invitation_projects', 'slug')->ignore($invitation->id)],
            'custom_domain' => ['nullable', 'string', 'max:255'],
            'event_date' => ['nullable', 'date'],
            'location_name' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'rsvp_count' => ['nullable', 'integer', 'min:0'],
            'music_title' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:active,draft,completed,expired'],
            'notes' => ['nullable', 'string'],
        ]);

        $validated['slug'] = Str::slug($validated['slug']);

        $invitation->update($validated);

        return redirect()->route('admin.invitations.index')->with('success', 'Data undangan digital berhasil diperbarui!');
    }

    public function destroy(InvitationProject $invitation): RedirectResponse
    {
        $invitation->delete();

        return redirect()->route('admin.invitations.index')->with('success', 'Undangan digital berhasil dihapus!');
    }
}
