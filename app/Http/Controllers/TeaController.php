<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tea;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\StoreTeaRequest;
use App\Http\Requests\UpdeateTeaRequest;
use App\Services\TeaService;
use App\Http\Requests\UpdateTeaRequest;

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
     * HTTp GET /teas
     */
    public function index(Request $request)
    {
        $teas = Tea::query()
        ->when($request->filled('search'),fn($query) =>
            $query->where('name', 'like', '%'.$request->search .'%')
        )
        ->when($request->filled('on_sale'),fn($query) =>
            $query->where('discount', '>', 0)
        )
        ->when($request->filled('in_stock'),fn($query)=>
            $query->where('stock', '>', 0)
        )->paginate(5);
        
        
        return view('tea.index', compact('teas'));
       
        // $teas = Tea::all();
        // return view('tea.index', compact('teas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tea.create')->with(200);
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeaRequest $request, TeaService $teaService)
    {
        $validatedData= $request->validated();
        $path = $request->file('image_path')->store('teas', 'public');
        $validatedData['image_path'] = $path;
        Tea::create($validatedData);
        return redirect()->route('teas.index')->with('success', 'Tea sikeresen hozzáadva');
        
        // dd($request->file('image_path')->extension());
        // Tea::create($request->validated());
        // return redirect()->route('teas.index')->with('success', 'Tea sikeresen hozzáadva!');
        // $tea = $teaService->createTea($request->validated());

        // // Válasz
        
        // return response()->json([
        //     'message' => 'Tea sikeresen hozzáadva!', 
        //     'tea' => $tea
        // ]);
    }


    // Flash üzenetek
    // success: Sikeres művelet
    // error: Hiba történt
    // warning: Figyelmeztetés
    // info: Információ

    /**
     * Display the specified resource.
     * get /teas/{id}
     */
    public function show(string $id)
    {
        $tea = Tea::findOrFail($id);
        return view('tea.show', compact('tea'));
    }
    // public function show(Tea $tea){
    //     return view('tea.show', compact('tea'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('tea.edit', ['tea' => Tea::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdeateTeaRequest $request, string $id)
    {
        
        // dd($request->validated());
        $tea = Tea::findOrFail($id);
        $tea->update($request->validated());
        return redirect()->route('teas.index')->with('success', 'Tea sikeresen frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tea = Tea::findOrFail($id);
        // $tea->delete();
        // return redirect()->route('teas.index')->with('success', 'Tea sikeresen törölve!');
        try{
            $tea->delete();
        }catch(\Exception $e){
            Log::error('Hiba történt a tea törlésekor: ' . $e->getMessage());
            return back()->with('error', 'Hiba történt a tea törlésekor. Kérjük, próbálja újra később.');

        }
        return redirect()->route('teas.index')->with(['success', 'tea sikeresen törölve'],204);
    }
}
