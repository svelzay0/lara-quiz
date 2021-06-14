<?php

namespace App\DTO;

use App\DTO\ChoiceDTO;

final class QuestionDTO
{
    public string $uuid;
    public string $text;
    public array $choices = [];

    public function __construct(string $uuid, string $text)
    {
        $this->uuid = $uuid;
        $this->text = $text;
    }

    public function getUUID()
    {
        return $this->uuid;
    }

    public function getText()
    {
        return $this->text;
    }

    public function addChoice(ChoiceDTO $choice): self
    {
        $this->choices[] = $choice;

        return $this;
    }

    public function getChoices(): array
    {
        return $this->choices;
    }
}
