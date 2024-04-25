<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseDetail extends Model
{
    use HasFactory;

    protected $fillable = ['survey_response_id', 'question_id', 'answer']; // Adjust according to your table structure

    // Relationship to SurveyResponse
    public function surveyResponse()
    {
        return $this->belongsTo(SurveyResponse::class);
    }

    // Optionally, if you need to reference the question directly
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
