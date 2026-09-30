<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvitationProject;
use App\Models\WebsiteProject;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): View
    {
        $user = Auth::user();

        $websiteCount = WebsiteProject::count();
        $websiteOnline = WebsiteProject::where('status', 'online')->count();

        $invitationCount = InvitationProject::count();
        $invitationActive = InvitationProject::where('status', 'active')->count();

        $metrics = [
            [
                'title' => 'Total Proyek',
                'value' => (string) ($websiteCount + $invitationCount),
                'growth' => '+14% bln ini',
                'icon' => 'folder',
                'color' => 'indigo',
            ],
            [
                'title' => 'Website Aktif',
                'value' => (string) $websiteCount,
                'growth' => "{$websiteOnline} online",
                'icon' => 'globe',
                'color' => 'blue',
            ],
            [
                'title' => 'Undangan Aktif',
                'value' => (string) $invitationCount,
                'growth' => "{$invitationActive} aktif tayang",
                'icon' => 'heart',
                'color' => 'pink',
            ],
            [
                'title' => 'Pesan Masuk / Leads',
                'value' => '49',
                'growth' => '12 belum dibaca',
                'icon' => 'message-square',
                'color' => 'emerald',
            ],
        ];

        $recentWebsites = WebsiteProject::latest()->take(5)->get();
        $recentInvitations = InvitationProject::latest()->take(4)->get();

        return view('admin.dashboard', compact('user', 'metrics', 'recentWebsites', 'recentInvitations'));
    }
}
