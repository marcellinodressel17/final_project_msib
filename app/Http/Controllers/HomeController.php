<?php 
namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        $recentScholarshipsCount = Beasiswa::where('created_at', '>=', now()->subDays(7))->count();
        $totalScholarshipsCount = Beasiswa::count();
        $companyCount = Beasiswa::count();

        return view('dashboard', compact('userCount', 'recentScholarshipsCount', 'totalScholarshipsCount', 'companyCount'));
    }
}
