<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Exception;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        try {
            $properties = Property::paginate(5);
            return sendResponse(true,"Property has been listed successfully",PropertyResource::collection($properties),$properties);
        } catch(Exception $e) {
            return sendError(400,$e->getMessage(),[]);
        }
    }

    public function show(Property $id)
    {
        try {
            return sendResponse(200,"Property has been listed successfully",new PropertyResource($id));
        } catch(Exception $e) {
            return sendError(400,$e->getMessage(),[]);
        }
    }

     public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'currency' => 'required',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'area' => 'required|integer',
            'address' => 'required',
            'pincode' => 'required',
            'image_url' => 'nullable|string',
            'available_from' => 'nullable|date'
        ]);

        

        $property = Property::create($validated);

        return sendResponse(201,"Propery created successfully",$property);
    }


}
