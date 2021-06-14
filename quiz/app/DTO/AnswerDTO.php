<?php

namespace App\DTO;

final class AnswerDTO
{
    public string $questionUUID;
    public array $choices = [];

    public function __construct(string $questionUUID)
    {
        $this->questionUUID = $questionUUID;
    }

    public function getQuestionUUID()
    {
        return $this->questionUUID;
    }

    public function addChoiceUUID(string $choiceUUID)
    {
        $this->choices[] = $choiceUUID;
    }

    public function getСhoices()
    {
        return $this->choices;
    }
}
