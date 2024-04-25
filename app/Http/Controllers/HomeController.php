<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;

class HomeController extends Controller
{
    public function store(Request $request)
{
    
    $data = $request->all();


    // $request->validate([
    //     'your-photo' => 'nullable|mimes:jpeg,png,pdf,doc,docx',
    //     'aadhaar-card' => 'nullable|mimes:jpeg,png,jpg,pdf,doc,docx',
    //     'occupation-document' => 'nullable|mimes:jpeg,png,jpg,pdf,doc,docx',
        

    // ]);
    // Validate the form data if necessary
    $otp = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
    $photoPath = null;
        if ($request->hasFile('your-photo')) {
            $photo = $request->file('your-photo');
            $photoName = $this->generateShortFileName($photo->getClientOriginalName(), 50); // Truncate the file name to 50 characters
            $photoPath = $photo->storeAs('public/photos', $photoName);
            $photoPath = str_replace('public/', 'storage/', $photoPath);
        }

        $aadhaarPath = null;
        if ($request->hasFile('aadhaar-card')) {
            $aadhaar = $request->file('aadhaar-card');
            $aadhaarName = $this->generateShortFileName($aadhaar->getClientOriginalName(), 50); // Truncate the file name to 50 characters
            $aadhaarPath = $aadhaar->storeAs('public/aadhar', $aadhaarName);
            $aadhaarPath = str_replace('public/', 'storage/', $aadhaarPath);
        }

        $occupationPath = null;
        if ($request->hasFile('occupation-document')) {
            $occupation = $request->file('occupation-document');
            $occupationName = $this->generateShortFileName($occupation->getClientOriginalName(), 50); // Truncate the file name to 50 characters
            $occupationPath = $occupation->storeAs('public/occupation', $occupationName);
            $occupationPath = str_replace('public/', 'storage/', $occupationPath);
        }


    People::create([
        'feeType' => $data['feeType'],
        'categoryType' => $data['categoryType'],
        'experienceType' => $data['experienceType'],
        'selectedAppointmentDate' => $data['selectedAppointmentDate'],
        'selectedAppointmentTime' => $data['selectedAppointmentTime'],
        'appointmentType' => $data['appointmentType'],
        'name' => $data['event-name'],
        'father_name' => $data['father-name'],
        'mobile_number' => $data['mobile-number'],
        'email' => $data['email'],
        'full_address' => $data['full-address'],
        'otp' => $otp,
        // 'age' => $data['your-age'],
        // 'gender' => $data['gender'],
        //     'consultancy_purpose' => $data['consultancy-purpose'],
        //     'photo' => $photoPath,
        //     'aadhaar_card' => $aadhaarPath,
        //     'occupation_document' => $occupationPath,
        // 'status_occupation' => $data['status-occupation'] ?? null,
    ]);

    Mail::to($data['email'])->send(new SendOtpMail($otp));

    return response()->json(['success' => true]);
}


private function generateShortFileName($fileName, $maxLength) {
    return strlen($fileName) > $maxLength ? substr($fileName, 0, $maxLength) : $fileName;
}
}