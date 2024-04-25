<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\ResponseDetail;

class AdminDashboardController extends Controller
{
    //

    public function index()
    {

        return view('welcome', );
    }
    public function dashboard()
    {

        return view('admin.dashboard', );
    }

    public function users(Request $request)
    {
        $search = $request->input('search', '');
        $categoryFilter = $request->input('category', '');
    
        $query = People::query();
    
        // Apply search filter
        if ($search != "") {
            $query->where('name', 'LIKE', "%$search%");
        }
    
        // Apply category filter
        if ($categoryFilter != "") {
            $query->where('categoryType', $categoryFilter);
        }
    
        // Get the filtered results
        $peoples = $query->orderByDesc('created_at')->get();
    
        return view('admin.users', compact('peoples', 'search', 'categoryFilter'));
    }
    

    public function leadsview($id)
        {
        $peoples = People::findOrFail($id); 
        return view('admin.leadsview',compact('peoples')); 
        }

        public function saveOTP($personId)
        {
            $person = People::find($personId);

            if ($person) {
                // Generate and save OTP
                $otp = mt_rand(1000, 9999); // Replace with your OTP generation logic
                $person->otp = $otp;
                $person->save();

                return response()->json(['otp' => $otp], 200);
            }

            return response()->json(['error' => 'Person not found.'], 404);
        }

    
    }