<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;

class DashboardController extends Controller
{
    public function index()
    {
        $prodiData = Prodi::withCount(['mahasiswa as mahasiswa_count' => function ($query) {
            $query->selectRaw('count(*)');
        }])->orderBy('nama_prodi')->get();

        $angkatanData = Mahasiswa::selectRaw('LEFT(npm, 2) as angkatan, count(*) as total')
            ->groupBy('angkatan')
            ->orderBy('angkatan')
            ->get();

        $categories = $prodiData->pluck('nama_prodi')->toArray();
        $counts = $prodiData->pluck('mahasiswa_count')->map(fn($count) => (int) $count)->toArray();

        $angkatanCategories = $angkatanData->pluck('angkatan')->map(fn($year) => (string) $year)->toArray();
        $angkatanCounts = $angkatanData->pluck('total')->map(fn($count) => (int) $count)->toArray();

        return view('dashboard', compact('categories', 'counts', 'angkatanCategories', 'angkatanCounts'));
    }
}