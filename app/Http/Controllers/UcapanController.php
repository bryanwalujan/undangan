<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function index()
    {
        $ucapans = Ucapan::where('is_approved', true)
                         ->latest()
                         ->take(30)
                         ->get();
        return view('ucapan', compact('ucapans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:50',
            'ucapan' => 'required|string|max:500',
        ]);

        Ucapan::create([
            'nama'       => strip_tags($request->nama),
            'ucapan'     => strip_tags($request->ucapan),
            'is_approved'=> true,
        ]);

        return response()->json(['success' => true, 'message' => 'Terima kasih!']);
    }

    public function latest()
    {
        $ucapans = Ucapan::where('is_approved', true)
                         ->latest()
                         ->take(30)
                         ->get();

        return response()->json($ucapans);
    }
}