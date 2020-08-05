<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
            [
                "body" => "What is your overall satisfaction rating with our company?"
            ],
            [
                "body" => "Please tell us why you feel that way."
            ],
            [
                "body" => "How likely are you to recommend our product to a friend or colleague?"
            ],
            [
                "body" => "Any additional comments about how we can improve your satisfaction with our products and services?"
            ]
        ]);
    }
}
