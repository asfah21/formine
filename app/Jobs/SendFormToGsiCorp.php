<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendFormToGsiCorp implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Data yang akan dikirim ke gsicorp.com
     *
     * @var array
     */
    public $formData;

    /**
     * Tentukan jenis form p2h yang disubmit (misal: 'p2h_lv', 'p2h_dt', dsb)
     *
     * @var string
     */
    public $formType;

    /**
     * The number of times the job may be attempted.
     * Retry 3 kali sesuai permintaan.
     *
     * @var int
     */
    public $tries = 3;

    /**
     * Calculate the number of seconds to wait before retrying the job.
     *
     * @return array<int, int>
     */
    public function backoff(): array
    {
        return [10, 30, 60]; // Retry dengan delay bertahap
    }

    /**
     * Create a new job instance.
     */
    public function __construct(string $formType, array $formData)
    {
        $this->formType = $formType;
        $this->formData = $formData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Setup payload yang akan dikirim
        $payload = [
            'type' => $this->formType,
            'data' => $this->formData,
            'submitted_at' => now()->toDateTimeString(),
        ];

        // URL tujuan di gsicorp.com (Ganti sesuai URL API endpoint sebenarnya)
        $endpointUrl = env('GSI_API_URL', 'https://db-ku.com/api/receive-p2h');

        // Kirim HTTP POST request ke gsicorp.com
        $response = Http::timeout(30)->post($endpointUrl, $payload);

        // Jika response gagal (status code 4xx atau 5xx), akan di-throw exception 
        // sehingga Job ini akan di-fail & di-retry otomatis oleh Queue Laravel
        if ($response->failed()) {
            Log::error("Gagal mengirim form {$this->formType} ke GSI Corp.", [
                'status' => $response->status(),
                'response' => $response->body(),
                'payload' => $payload,
            ]);
            
            $response->throw();
        }

        Log::info("Berhasil mengirim form {$this->formType} ke GSI Corp.");
    }
}
