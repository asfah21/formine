<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class FeedbackController extends Controller
{
    public function submitFeedback(Request $request)
    {
        // Mengambil data dari form
        $email = $request->input('email');
        $feedback = $request->input('feedback');

        // Mengambil alamat IP pengguna
        $ipAddress = $request->ip();

        // Mengambil detail perangkat dan OS
        $agent = new Agent();
        $device = $agent->device();
        $os = $agent->platform();

        // Simpan data ke database
        Feedback::create([
            'email' => $email,
            'feedback' => $feedback,
            'ip_address' => $ipAddress,
            'device' => $device,
            'os' => $os,
        ]);

        // Kembalikan respons (bisa berupa view atau redirect)
        return back()->with('success', 'Your feedback has been submitted.');
    }
}
