<?php

namespace App\Http\Controllers;

use App\Models\Dumptruck;
use Illuminate\Http\Request;


class SurveyController extends Controller
{
    public function stored(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'vehicle_type' => 'required|string|max:50',
            'comments' => 'nullable|string',
        ]);

        Dumptruck::create($validated);

        return redirect()->route('surveys.form')->with('success', 'Survey berhasil dikirim!');
    }
}
