<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeaRequest;
use Illuminate\Http\Request;
use App\Models\Tea;
use App\Http\Resources\TeaResource;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Tea::all();
        return TeaResource::collection(Tea::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeaRequest $request)
    {
        
        $tea = Tea::create($request->validated());
        return response()->json($tea, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tea $tea)
    {
        // if ($tea->stock === 0){
        //     return response()->json([
        //         'error'=> 'Ez a tea jelenleg nincs készleten, ezért nem megtekinthető.'
        //     ], 400);
        // }
        // return $tea;
        return new TeaResource($tea);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tea $tea)
    {
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:30',
            'image_path'=>'sometimes|required|string|max:255',
            'price'=>'sometimes|required|numeric',
            'specification'=>'string|max:255',
            'stock'=>'sometimes|required|numeric',
            'discount'=>'numeric|max:100',
        ]);
        $tea->update($validated);
        return response()->json($tea);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tea $tea)
    {
        $tea->delete();
        return response()->json(null, 204);
    }
}
