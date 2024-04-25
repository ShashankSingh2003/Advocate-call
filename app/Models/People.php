<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $table = 'peoples';
    protected $fillable = [
        'feeType',
        'categoryType',
        'experienceType',
        'selectedAppointmentDate',
        'selectedAppointmentTime',
        'appointmentType',
        'otp',
        'name',
        'father_name',
        'mobile_number',
        'email',
        'age',
        'gender',
        'full_address',
        'consultancy_purpose',
        'photo',
        'aadhaar_card',
        'occupation_document',
        'status_occupation',
    ];
}
