<?php

// app/Http/Controllers/PropertyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;

class PropertyController extends Controller
{
    public function create(): View|Factory|Application
    {
        return view('properties/create');
    }
    public function show($id): View|Factory|Application
    {

        $property = Property::findOrFail($id);

        return view('properties.show', compact('property'));
    }
    public function store(Request $request): Redirector|RedirectResponse|Application
    {
        // Validate the form data
        $validatedData = $request->validate([
            'property_title' => 'required|string|max:255',
            'rooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'property_type' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|image|max:10240',
        ]);

        // Upload the property photo
        $photoPath = $request->file('photo');
        $photoFileName = time() . '_' . $photoPath->getClientOriginalName();
        $photoPath->storeAs('properties', $photoFileName, 'public');

        // Save the property information to the database
        Property::create([
            'property_title' => $validatedData['property_title'],
            'rooms' => $validatedData['rooms'],
            'bathrooms' => $validatedData['bathrooms'],
            'location' => $validatedData['location'],
            'price' => $validatedData['price'],
            'property_type' => $validatedData['property_type'],
            'description' => $validatedData['description'],
            'photo' => $photoFileName, // Storing the filename
        ]);

        return redirect('/properties')->with('success', 'Property added successfully!');
    }


}
