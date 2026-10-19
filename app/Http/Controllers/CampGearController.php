<?php

namespace App\Http\Controllers;

use App\Models\CampGear;
use Illuminate\Http\Request;

class CampGearController extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->query('kategori');

        $categories = CampGear::select('category')->distinct()->orderBy('category')->pluck('category');

        $gears = CampGear::when($kategori, function ($query) use ($kategori) {
                $query->where('category', $kategori);
            })
            ->orderBy('id')
            ->get();

        return view('home', compact('gears', 'categories', 'kategori'));
    }

    public function show($id)
    {
        $gear = CampGear::findOrFail($id);

        $related = CampGear::where('category', $gear->category)
            ->where('id', '!=', $gear->id)
            ->limit(4)
            ->get();

        return view('camp_gears.show', compact('gear', 'related'));
    }
}
