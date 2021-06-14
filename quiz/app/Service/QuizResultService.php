<?php

namespace App\Service;

use App\DTO\QuizDTO;
use App\DTO\QuestionDTO;
use App\DTO\ChoiceDTO;

class QuizResultService
{

    public function getResult($data): float
    {
        $data = $data->toArray();
        // dd(count($data));
        $float = 0.0;
        if (count($data) < 8) {
            foreach ($data as $result) { //Правильные ответы
                if ($result == '1-1-2') {
                    $float += 0.2;
                }
                if ($result == '1-2-1') {
                    $float += 0.2;
                }
                if ($result == '1-3-1') {
                    $float += 0.2;
                }
                if ($result == '1-4-3') {
                    $float += 0.1;
                }
                if ($result == '1-4-4') {
                    $float += 0.1;
                }
                if ($result == '1-5-1') {
                    $float += 0.1;
                }
                if ($result == '1-5-4') {
                    $float += 0.1;
                }
            }
            return $float;
        }
        else {
            $float = -0.1;
            return $float;
        }
    }

    public function getQuiz ()
    {
        $choice11 = new ChoiceDTO(
            '1-1-1',
            '7',
            false
        );

        $choice12 = new ChoiceDTO(
            '1-1-2',
            '10',
            true
        );

        $choice13 = new ChoiceDTO(
            '1-1-3',
            '8',
            false
        );

        $choice14 = new ChoiceDTO(
            '1-1-4',
            '9',
            false
        );

        $question1 = new QuestionDTO(
            '1-1',
            'Сколько в php типов данных?'
        );

        $question1->addChoice($choice11);
        $question1->addChoice($choice12);
        $question1->addChoice($choice13);
        $question1->addChoice($choice14);

        $choice21 = new ChoiceDTO(
            '1-2-1',
            'array',
            false
        );

        $choice22 = new ChoiceDTO(
            '1-2-2',
            'string',
            false
        );

        $choice23 = new ChoiceDTO(
            '1-2-3',
            'integer',
            true
        );

        $choice24 = new ChoiceDTO(
            '1-2-4',
            'float',
            false
        );

        $question2 = new QuestionDTO(
            '1-2',
            'Какой тип данных является массивом?'
        );

        $question2->addChoice($choice21);
        $question2->addChoice($choice22);
        $question2->addChoice($choice23);
        $question2->addChoice($choice24);

        $choice31 = new ChoiceDTO(
            '1-3-1',
            'string',
            true
        );

        $choice32 = new ChoiceDTO(
            '1-3-2',
            'null',
            false
        );

        $choice33 = new ChoiceDTO(
            '1-3-3',
            'array',
            false
        );

        $choice34 = new ChoiceDTO(
            '1-3-4',
            'callable',
            false
        );

        $question3 = new QuestionDTO(
            '1-3',
            'Какой тип данных является строкой?'
        );

        $question3->addChoice($choice31);
        $question3->addChoice($choice32);
        $question3->addChoice($choice33);
        $question3->addChoice($choice34);

        $choice41 = new ChoiceDTO(
            '1-4-1',
            'object',
            false
        );

        $choice42 = new ChoiceDTO(
            '1-4-2',
            'resource',
            false
        );

        $choice43 = new ChoiceDTO(
            '1-4-3',
            'integer',
            true
        );

        $choice44 = new ChoiceDTO(
            '1-4-4',
            'float',
            true
        );

        $question4 = new QuestionDTO(
        '1-4',
        'Какие типы являются числовыми?'
        );

        $question4->addChoice($choice41);
        $question4->addChoice($choice42);
        $question4->addChoice($choice43);
        $question4->addChoice($choice44);

        $choice51 = new ChoiceDTO(
            '1-5-1',
            'Python',
            false
        );

        $choice52 = new ChoiceDTO(
            '1-5-2',
            'Microsoft',
            false
        );

        $choice53 = new ChoiceDTO(
            '1-5-3',
            'Kaspersky',
            true
        );

        $choice54 = new ChoiceDTO(
            '1-5-4',
            'Assembler',
            true
        );

        $question5 = new QuestionDTO(
            '1-5',
            'Какие языки программирования существуют?'
        );

        $question5->addChoice($choice51);
        $question5->addChoice($choice52);
        $question5->addChoice($choice53);
        $question5->addChoice($choice54);


        $quiz = new QuizDTO(
            '1',
            'Programming'
        );

        $quiz->addQuestion($question1);
        $quiz->addQuestion($question2);
        $quiz->addQuestion($question3);
        $quiz->addQuestion($question4);
        $quiz->addQuestion($question5);

        return array($quiz);
    }
}
