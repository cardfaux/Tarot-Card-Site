<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;
use Illuminate\Support\Facades\Auth;


class ReadingController extends Controller
{
    public function index()
    {
        $readings = Reading::where('user_id', Auth::id())->latest()->get();
        return view('readings.index', compact('readings'));
    }

    public function create()
    {
        return view('readings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'details' => 'nullable|string',
        ]);

        Reading::create([
            'user_id' => Auth::id(),
            'question' => $request->question,
            'details' => $request->details,
        ]);

        return redirect()->route('readings.index')->with('success', 'Your tarot reading request has been submitted.');
    }

    public function publicIndex()
    {
        // Optionally, you could show featured readings, info about services, etc.
        return view('pages.readings');
    }
}
