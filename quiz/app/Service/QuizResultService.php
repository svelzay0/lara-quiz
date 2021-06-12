<?php

namespace App\Service;

use App\DTO\QuizDTO;
use App\DTO\QuestionDTO;
use App\DTO\ChoiceDTO;
use App\DTO\AnswersDTO;
use App\DTO\AnswerDTO;

use Exception;

class QuizResultService
{
    private QuizDTO $quiz;
    private AnswersDTO $answers;

    public function __construct(QuizDTO $quiz, AnswersDTO $answers)
    {
        $this->quiz = $quiz;
        $this->answers = $answers;
    }

    // public function getQuestions()
    // {
    //     return '123';
    //     // dd($this->answers);
    //     // your code here
    // }

    public function getResult(): float
    {
        // return 123.35;
        // dd($this->answers);
        // your code here
    }
}
