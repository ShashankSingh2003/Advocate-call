<?php

namespace App\Http\Controllers;
use App\Models\KnownAdvocate;
use Illuminate\Http\Request;

class KnownAdvocateController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function knownadvocate(Request $request)
    {
        $search = $request->input('search', "");
    
        if ($search != "") {
            $known_advocates = KnownAdvocate::where('name', 'LIKE', "%$search%")->get();
        } else {
            $known_advocates = KnownAdvocate::all();
        }
    
        return view('admin.knownadvocate', compact('known_advocates', 'search'));
    }
    
}
