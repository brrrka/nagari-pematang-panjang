<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use App\Models\Gallery;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'umkm_count' => Umkm::count(),
            'active_umkm' => Umkm::where('is_active', true)->count(),
            'gallery_count' => Gallery::count(),
            'article_count' => Article::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
