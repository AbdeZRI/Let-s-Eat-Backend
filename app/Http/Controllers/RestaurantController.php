<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index()
    {
        
        $restaurants = Restaurant::all();
        
        return response()->json(['restaurants' => $restaurants], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'adresse' => 'required|string',
            'heures_ouverture' => 'required|string',
        ]);

        $restaurant = Restaurant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'heures_ouverture' => $request->heures_ouverture,
        ]);
        
        return response()->json(['restaurant' => $restaurant], 201);
    }

    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'nom' => 'string',
            'adresse' => 'string',
            'heures_ouverture' => 'string',
        ]);

        $restaurant->update([
            'nom' => $request->nom ?? $restaurant->nom,
            'adresse' => $request->adresse ?? $restaurant->adresse,
            'heures_ouverture' => $request->heures_ouverture ?? $restaurant->heures_ouverture,
        ]);

        return response()->json(['restaurant' => $restaurant], 200);
    }

    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        
        return response()->json(null, 204);
    }
}
