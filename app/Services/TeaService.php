<?php

namespace App\Services;

use App\Models\Tea;
use Illuminate\Support\Facades\Log;

class TeaService
{
    /**
     * Create a new class instance.
     */
    public function createTea(array $data) : Tea
    {
        // Üzleti logika: Nagykereskedelmi ár kiszámítása

        $data['nagyker_ar'] = $data['ar_huf'] * 0.8; 

        // Adatbázis művelet

        $tea = Tea::create([
            'nev' => $data['nev'],
            'ar_huf' => $data['ar_huf'],
            'nagyker_ar' => $data['nagyker_ar'],
            'tipus' => $data['tipus'],
            'leiras' => $data['leiras'],
        ]);

        // Logolás

        Log::info('Új tea került a kínálatba: ' . $tea->nev);

        return $tea;
    }
}
