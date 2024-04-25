<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $questions = [
            // Family Category
            [
                'category' => 'Family',
                'text' => 'Name of head of family',
                'type' => 'text',
            ],
            [
                'category' => 'Family',
                'text' => "Father/husband's name",
                'type' => 'text',
            ],
            [
                'category' => 'Family',
                'text' => 'Total number of members in the family',
                'type' => 'number',
            ],
            [
                'category' => 'Family',
                'text' => 'Educational level of the head of the family',
                'type' => 'multiple_choice',
                'options' => ['Below High school', 'High School', 'Graduation', 'Post Graduation'],
            ],
            [
                'category' => 'Family',
                'text' => 'Main occupation of the head of the family',
                'type' => 'text',
            ],
            [
                'category' => 'Family',
                'text' => 'Is there any member in the family in government service?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'Is Aadhar card issued to all members of the family?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'How many members in the family do not have Aadhaar card issued? (in number)',
                'type' => 'number',
            ],
            [
                'category' => 'Family',
                'text' => 'Is ration card issued?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'If ration card is issued then total units (in numbers)',
                'type' => 'number',
            ],
            [
                'category' => 'Family',
                'text' => 'Does the family qualify for Ayushman Card? Yes/No If eligible for Ayushman card then how many members have Ayushman card?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'If eligible for Ayushman card then how many members have Ayushman card?',
                'type' => 'number',
            ],
            [
                'category' => 'Family',
                'text' => 'How many members have Ayushman card not issued? (in number)',
                'type' => 'number',
            ],
            [
                'category' => 'Family',
                'text' => 'Housing situation of the family?',
                'type' => 'multiple_choice',
                'options' => ['Raw', 'Semi-Pacca', 'Pacca'],
            ],
            [
                'category' => 'Family',
                'text' => 'Is the house electrified?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'Has the family received the benefit of Ujjwala Yojana?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'Does the family have individual toilets?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'Does the family own agricultural land?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Family',
                'text' => 'If the land is cultivable, then are you getting the benefit of PM Kisan Samman Nidhi?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            // Personal Category
            [
                'category' => 'Personal',
                'text' => 'How many members of the family have bank accounts? (in number)',
                'type' => 'number',
            ],
            [
                'category' => 'Personal',
                'text' => 'How many children in the family study in primary/upper primary school? (in number)',
                'type' => 'number',
            ],
            [
                'category' => 'Personal',
                'text' => 'How many children of the family study in Anganwadi centre? (in number)',
                'type' => 'number',
            ],
            [
                'category' => 'Personal',
                'text' => 'Is there a person above 60 years of age in the family?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Personal',
                'text' => 'If a person is above 60 years of age, are they getting old age pension?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            // Other Category
            [
                'category' => 'Other',
                'text' => 'Is there any destitute female member in the family after the death of her husband?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
            [
                'category' => 'Other',
                'text' => 'If there is a destitute female member, is she getting destitute pension?',
                'type' => 'multiple_choice',
                'options' => ['Yes', 'No'],
            ],
        ];
        

        foreach ($questions as $q) {
            $questionId = DB::table('questions')->insertGetId([
                'category' => $q['category'],
                'text' => $q['text'],
                'type' => $q['type'],
            ]);

            if (isset($q['options'])) {
                foreach ($q['options'] as $option) {
                    DB::table('options')->insert([
                        'question_id' => $questionId,
                        'option' => $option,
                    ]);
                }
            }
        }
    }
}
