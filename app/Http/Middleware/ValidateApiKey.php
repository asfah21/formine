<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateApiKey
{
    // Whitelist IP
    protected $whitelistIps = [
        '127.0.0.1',
        '::1',
        // Tambahkan IP client lain di bawah ini:
        // '192.168.1.100',
        // '10.0.0.50',
    ];

    public function handle(Request $request, Closure $next)
    {
        $clientIp = $request->ip();

        // Cek whitelist IP (kalau kosong maka skip pengecekan)
        if (!empty($this->whitelistIps) && !in_array($clientIp, $this->whitelistIps)) {
            return response()->json([
                'status' => 'error',
                'message' => 'IP tidak diizinkan: ' . $clientIp
            ], 403);
        }

        // Validasi API Key
        $apiKey = $request->header('x-api-key');
        $validKey = env('PUBLIC_API_KEY');

        if (!$apiKey || $apiKey !== $validKey) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid or missing API Key'
            ], 401);
        }

        return $next($request);
    }
}
