<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteProject;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(Request $request): View
    {
        $query = WebsiteProject::query();

        if ($search = $request->string('search')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('client_name', 'like', "%{$search}%")
                    ->orWhere('project_name', 'like', "%{$search}%")
                    ->orWhere('domain', 'like', "%{$search}%")
                    ->orWhere('client_phone', 'like', "%{$search}%");
            });
        }

        if ($status = $request->string('status')->toString()) {
            if ($status !== 'all') {
                $query->where('status', $status);
            }
        }

        if ($category = $request->string('category')->toString()) {
            if ($category !== 'all') {
                $query->where('category', $category);
            }
        }

        $projects = $query->latest()->paginate(10)->withQueryString();

        $stats = [
            'total' => WebsiteProject::count(),
            'online' => WebsiteProject::where('status', 'online')->count(),
            'in_progress' => WebsiteProject::where('status', 'in_progress')->count(),
            'review' => WebsiteProject::where('status', 'review')->count(),
        ];

        return view('admin.websites.index', compact('projects', 'stats'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'client_name' => ['required', 'string', 'max:255'],
            'client_phone' => ['nullable', 'string', 'max:50'],
            'project_name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'package_name' => ['required', 'string', 'max:100'],
            'domain' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:in_progress,review,online,pending'],
            'deadline' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ]);

        WebsiteProject::create($validated);

        return redirect()->route('admin.websites.index')->with('success', 'Proyek website baru berhasil ditambahkan!');
    }

    public function update(Request $request, WebsiteProject $website): RedirectResponse
    {
        $validated = $request->validate([
            'client_name' => ['required', 'string', 'max:255'],
            'client_phone' => ['nullable', 'string', 'max:50'],
            'project_name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:100'],
            'package_name' => ['required', 'string', 'max:100'],
            'domain' => ['nullable', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:in_progress,review,online,pending'],
            'deadline' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ]);

        $website->update($validated);

        return redirect()->route('admin.websites.index')->with('success', 'Data proyek website berhasil diperbarui!');
    }

    public function destroy(WebsiteProject $website): RedirectResponse
    {
        $website->delete();

        return redirect()->route('admin.websites.index')->with('success', 'Proyek website berhasil dihapus!');
    }
}
