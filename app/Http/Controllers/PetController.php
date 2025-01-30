<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pet::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $pet = new Pet();
        // $pet->name = $request->name;
        // $pet->age = $request->age;
        // $pet->save();

        //ahora hazlo de asignacion masiva
        $pet = Pet::create($request->all());

        return $pet;
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return $pet;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        // $pet->name = $request->name;
        // $pet->age = $request->age;
        // $pet->save();

        $pet->update($request->all());

        return $pet;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return response()->json(['message' => 'Pet deleted']);
    }
}
