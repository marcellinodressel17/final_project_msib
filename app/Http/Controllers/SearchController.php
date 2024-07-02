<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa; // Sesuaikan dengan model yang digunakan
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if (!$query) {
            return redirect()->back();
        } else {
            $beasiswas = Beasiswa::where('title', 'LIKE', "%$query%")
            ->orWhere('jenis_pendidikan', 'LIKE', "%$query%")
            ->get();

        return view('partials.search_results', compact('beasiswas', 'query'));
        }
        
    }
}