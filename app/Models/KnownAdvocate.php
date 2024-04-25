<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnownAdvocate extends Model
{
    use HasFactory;
    
    protected $table = 'known_advocates';
    protected $fillable = ['name', 'district', 'area_of_practice', 'address', 'mobile'];

}
