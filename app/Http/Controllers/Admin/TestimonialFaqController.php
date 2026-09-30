<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestimonialFaqController extends Controller
{
    public function index(Request $request): View
    {
        $tab = $request->string('tab')->toString() ?: 'testimonials';

        $testimonials = Testimonial::orderBy('order')->latest()->get();
        $faqs = Faq::orderBy('order')->latest()->get();

        $stats = [
            'total_testimonials' => Testimonial::count(),
            'active_testimonials' => Testimonial::where('is_active', true)->count(),
            'total_faqs' => Faq::count(),
            'active_faqs' => Faq::where('is_active', true)->count(),
        ];

        return view('admin.testimonials_faq.index', compact('testimonials', 'faqs', 'tab', 'stats'));
    }

    public function storeTestimonial(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'service_name' => ['nullable', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'content' => ['required', 'string'],
            'avatar' => ['nullable', 'string', 'max:500'],
            'is_active' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = (int) ($validated['order'] ?? 0);

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials_faq.index', ['tab' => 'testimonials'])
            ->with('success', 'Testimoni ulasan klien berhasil ditambahkan!');
    }

    public function updateTestimonial(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['nullable', 'string', 'max:255'],
            'service_name' => ['nullable', 'string', 'max:255'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'content' => ['required', 'string'],
            'avatar' => ['nullable', 'string', 'max:500'],
            'is_active' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = (int) ($validated['order'] ?? 0);

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials_faq.index', ['tab' => 'testimonials'])
            ->with('success', 'Testimoni berhasil diperbarui!');
    }

    public function destroyTestimonial(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials_faq.index', ['tab' => 'testimonials'])
            ->with('success', 'Testimoni berhasil dihapus!');
    }

    public function storeFaq(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'question' => ['required', 'string', 'max:500'],
            'answer' => ['required', 'string'],
            'category' => ['required', 'string', 'max:100'],
            'is_active' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = (int) ($validated['order'] ?? 0);

        Faq::create($validated);

        return redirect()->route('admin.testimonials_faq.index', ['tab' => 'faqs'])
            ->with('success', 'Item FAQ berhasil ditambahkan!');
    }

    public function updateFaq(Request $request, Faq $faq): RedirectResponse
    {
        $validated = $request->validate([
            'question' => ['required', 'string', 'max:500'],
            'answer' => ['required', 'string'],
            'category' => ['required', 'string', 'max:100'],
            'is_active' => ['nullable', 'boolean'],
            'order' => ['nullable', 'integer'],
        ]);

        $validated['is_active'] = $request->boolean('is_active');
        $validated['order'] = (int) ($validated['order'] ?? 0);

        $faq->update($validated);

        return redirect()->route('admin.testimonials_faq.index', ['tab' => 'faqs'])
            ->with('success', 'Item FAQ berhasil diperbarui!');
    }

    public function destroyFaq(Faq $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()->route('admin.testimonials_faq.index', ['tab' => 'faqs'])
            ->with('success', 'Item FAQ berhasil dihapus!');
    }
}
