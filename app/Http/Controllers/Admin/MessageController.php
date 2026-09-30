<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request): View
    {
        $query = ContactMessage::query();

        if ($search = $request->string('search')->toString()) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('message', 'like', "%{$search}%");
            });
        }

        if ($status = $request->string('status')->toString()) {
            if ($status !== 'all') {
                $query->where('status', $status);
            }
        }

        if ($service = $request->string('service_type')->toString()) {
            if ($service !== 'all') {
                $query->where('service_type', $service);
            }
        }

        $messages = $query->latest()->paginate(15)->withQueryString();

        $stats = [
            'total' => ContactMessage::count(),
            'new' => ContactMessage::where('status', 'new')->count(),
            'in_progress' => ContactMessage::whereIn('status', ['contacted', 'in_progress'])->count(),
            'completed' => ContactMessage::where('status', 'completed')->count(),
        ];

        return view('admin.messages.index', compact('messages', 'stats'));
    }

    public function update(Request $request, ContactMessage $message): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'in:new,contacted,in_progress,completed,spam'],
            'admin_notes' => ['nullable', 'string'],
        ]);

        $message->update($validated);

        return redirect()->route('admin.messages.index')->with('success', 'Status pesan konsultasi berhasil diperbarui!');
    }

    public function destroy(ContactMessage $message): RedirectResponse
    {
        $message->delete();

        return redirect()->route('admin.messages.index')->with('success', 'Pesan konsultasi berhasil dihapus!');
    }
}
