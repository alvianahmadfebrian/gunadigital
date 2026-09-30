<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPackage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request): View
    {
        $category = $request->string('category')->toString() ?: 'website';

        $packages = PricingPackage::where('category', $category)
            ->orderBy('order')
            ->get();

        $stats = [
            'total' => PricingPackage::count(),
            'website' => PricingPackage::where('category', 'website')->count(),
            'undangan' => PricingPackage::where('category', 'undangan')->count(),
        ];

        return view('admin.packages.index', compact('packages', 'category', 'stats'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['required', 'in:website,undangan'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:100'],
            'period' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'features' => ['required', 'string'],
            'is_popular' => ['nullable', 'boolean'],
            'badge' => ['nullable', 'string', 'max:100'],
            'cta_text' => ['required', 'string', 'max:100'],
            'order' => ['nullable', 'integer'],
        ]);

        $featuresArray = array_values(array_filter(array_map('trim', explode("\n", $validated['features']))));

        PricingPackage::create([
            'category' => $validated['category'],
            'name' => $validated['name'],
            'price' => $validated['price'],
            'period' => $validated['period'],
            'description' => $validated['description'] ?? null,
            'features' => $featuresArray,
            'is_popular' => $request->boolean('is_popular'),
            'badge' => $validated['badge'] ?? null,
            'cta_text' => $validated['cta_text'],
            'order' => (int) ($validated['order'] ?? 0),
        ]);

        return redirect()->route('admin.packages.index', ['category' => $validated['category']])
            ->with('success', 'Paket harga baru berhasil ditambahkan!');
    }

    public function update(Request $request, PricingPackage $package): RedirectResponse
    {
        $validated = $request->validate([
            'category' => ['required', 'in:website,undangan'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:100'],
            'period' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'features' => ['required', 'string'],
            'is_popular' => ['nullable', 'boolean'],
            'badge' => ['nullable', 'string', 'max:100'],
            'cta_text' => ['required', 'string', 'max:100'],
            'order' => ['nullable', 'integer'],
        ]);

        $featuresArray = array_values(array_filter(array_map('trim', explode("\n", $validated['features']))));

        $package->update([
            'category' => $validated['category'],
            'name' => $validated['name'],
            'price' => $validated['price'],
            'period' => $validated['period'],
            'description' => $validated['description'] ?? null,
            'features' => $featuresArray,
            'is_popular' => $request->boolean('is_popular'),
            'badge' => $validated['badge'] ?? null,
            'cta_text' => $validated['cta_text'],
            'order' => (int) ($validated['order'] ?? 0),
        ]);

        return redirect()->route('admin.packages.index', ['category' => $validated['category']])
            ->with('success', 'Paket harga berhasil diperbarui!');
    }

    public function destroy(PricingPackage $package): RedirectResponse
    {
        $category = $package->category;
        $package->delete();

        return redirect()->route('admin.packages.index', ['category' => $category])
            ->with('success', 'Paket harga berhasil dihapus!');
    }
}
