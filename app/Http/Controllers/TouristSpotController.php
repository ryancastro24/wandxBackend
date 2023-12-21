<?php

namespace App\Http\Controllers;

use App\Http\Requests\TouristSpotRequest;
use App\Models\TouristSpot;
use Illuminate\Http\Request;

class TouristSpotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TouristSpot::all();
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
    public function store(TouristSpotRequest $request)
    {
        $validated = $request->validated();

        // Upload image
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
        $image->storeAs('tourist_spot_images', $imageName, 'public'); // Adjust the storage path as needed
    
        // Save data to the database
        $tourist_spot = TouristSpot::create([
            'name' => $validated['name'],
            'location' => $validated['location'],
            'open_hours' => $validated['open_hours'],
            'image' => $imageName,
        ]);
    
        return $tourist_spot;
    
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
