<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'text', 'type'];


    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function responseDetails()
    {
        return $this->hasMany(ResponseDetail::class);
    }
}
