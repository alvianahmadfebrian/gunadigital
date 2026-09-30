<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request): View
    {
        $query = Portfolio::query();

        if ($search = $request->string('search')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('tag', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($category = $request->string('category')->toString()) {
            if ($category !== 'all') {
                $query->where('category', $category);
            }
        }

        $portfolios = $query->orderBy('order')->latest()->paginate(12)->withQueryString();

        $stats = [
            'total' => Portfolio::count(),
            'website' => Portfolio::where('category', 'website')->count(),
            'undangan' => Portfolio::where('category', 'undangan')->count(),
            'featured' => Portfolio::where('is_featured', true)->count(),
        ];

        return view('admin.portfolios.index', compact('portfolios', 'stats'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'in:website,undangan'],
            'tag' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'link' => ['nullable', 'string', 'max:500'],
            'badge_color' => ['required', 'string', 'max:50'],
            'is_featured' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['order'] = (int) ($validated['order'] ?? 0);

        Portfolio::create($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Item portofolio baru berhasil ditambahkan!');
    }

    public function update(Request $request, Portfolio $portfolio): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'in:website,undangan'],
            'tag' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'string', 'max:500'],
            'description' => ['nullable', 'string'],
            'link' => ['nullable', 'string', 'max:500'],
            'badge_color' => ['required', 'string', 'max:50'],
            'is_featured' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['order'] = (int) ($validated['order'] ?? 0);

        $portfolio->update($validated);

        return redirect()->route('admin.portfolios.index')->with('success', 'Item portofolio berhasil diperbarui!');
    }

    public function destroy(Portfolio $portfolio): RedirectResponse
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Item portofolio berhasil dihapus!');
    }
}
