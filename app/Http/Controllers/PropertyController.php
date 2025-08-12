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
            $properties = Property::paginate(10);
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
       try {

           $validated = $request->validate([
               'title' => 'required',
               'price' => 'required|numeric',
               'currency' => 'required',
               'bedrooms' => 'required|integer',
               'bathrooms' => 'required|integer',
               'area' => 'required|integer',
               'address' => 'required',
               'city' => 'required',
               'state' => 'required',
               'status' => 'required',
               'pincode' => 'required',
               'image_url' => 'nullable|image',
               'available_from' => 'nullable|date',
              
           ]);
   
           $imageName = time().'.'.$request->image_url->extension();
           $request->image_url->move(public_path('images'), $imageName);
   
           $property = Property::create([
                'title' => $request->title,
                'price' => $request->price,
                'currency' => $request->currency,
                'bedrooms' => $request->bedrooms,
                'bathrooms' => $request->bathrooms,
                'area' => $request->area,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'status' => $request->status,
                'pincode' => $request->pincode,
                'image_url' => $imageName,
                'available_from'=> $request->available_from,
           ]);
   
           return sendResponse(201,"Propery created successfully",$property);
       } catch(Exception $e) {
            return sendError(400,$e->getMessage(),[]);
       }
    }


}
