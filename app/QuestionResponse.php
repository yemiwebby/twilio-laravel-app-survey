<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionResponse extends Model
{
    protected $fillable = [
        'answer', 'question_id', 'messages_id',
    ];
}
