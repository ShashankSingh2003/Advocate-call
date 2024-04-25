<?php

namespace App\Http\Controllers;
use App\Models\KnownAdvocate;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function index(){
        return view("frontend.your-advocate");
    }
    public function store(Request $request){
        // Log or dump request data
        // dd($request->all());
    
        KnownAdvocate::create([
            'name'=> $request->input('event-name'),
            'district'=> $request->input('district'),
            'area_of_practice'=> $request->input('practice'),
            'address'=> $request->input('address'),
            'mobile'=> $request->input('mobile'),
        ]);
    
        return response()->json(['success' => true, 'message' => 'Form submitted successfully']);
    }
    
}