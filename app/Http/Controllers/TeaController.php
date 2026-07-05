<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreTeaRequest;
use App\Services\TeaService;

class TeaController extends Controller
{

#section('crud')
    //   CRUD
    //   Create, Read, Update, Delete
      
    //   create
    //   Tea::create([
    //         'name' => 'Black Tea',
    //         'image_path' => 'images/black_tea.jpg',
    //         'price' => 10.99,
    //         'specification' => 'A strong and robust black tea.',
    //         'stock' => 100,
    //         'discount' => 0.1,
    //     ]);


    //   update
    //   $tea = Tea::where('id', 1)->first();
    //   $tea->update([
    //  'name' => 'Updated Black Tea',
    //  'price' => 11.99,
    //  ]);



    //  delete 
    //  $tea = Tea::where('id', 1)->first();
    //  $tea->delete();
     


    // $tea = Tea::where('id', 1)->first();
    //     $tea->price = 11.99;
    //     $tea->save();

        // Tea::updateOrCreate(
        //     ['name' => 'Green Tea'],
        //     [
        //         'image_path' => 'images/green_tea.jpg',
        //         'price' => 9.99,
        //         'specification' => 'A refreshing green tea.',
        //         'stock' => 80,
        //         'discount' => 0.05,
        //     ]
        // );
        // Tea::firstOrCreate(
        //     ['name' => 'Green Tea'],
        //     [
        //         'image_path' => 'images/green_tea.jpg',
        //         'price' => 9.99,
        //         'specification' => 'A refreshing green tea.',
        //         'stock' => 80,
        //         'discount' => 0.05,
        //     ]
        // );
#endsection('crud');
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        



        // $teas = Tea::where('name','Black Tea')->first();
        // return response()->json($teas);
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
