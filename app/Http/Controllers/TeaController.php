<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreTeaRequest;
use App\Services\TeaService;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $teas = [
            [
                'nev' => 'Zöld tea',
                'ar_huf' => 1500,
                'leiras' => 'Frissítő zöld tea, mely frissíti a testet és az elmét.',
                'kulonleges-e' => true,
                'discount' => 10
                ],
            [
                'nev' => 'Fekete tea',
                'ar_huf' => 1200,
                
                'leiras' => 'Erős fekete tea, mely erősítő hatású.',
                'kulonleges-e' => false,
                'discount' => null
            ],
            [
                'nev' => 'Gyümölcs tea',
                'ar_huf' => 1000,
                'leiras' => 'Édes gyümölcs tea, mintha a nyár ízeit kortyolnánk.',
                'kulonleges-e' => false,
                'discount' => 5
            ],
        ] ;   
        
        return view('home', compact('teas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeaRequest $request, TeaService $teaService)
    {
        
        $tea = $teaService->createTea($request->validated());

        // Válasz
        
        return response()->json([
            'message' => 'Tea sikeresen hozzáadva!', 
            'tea' => $tea
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
