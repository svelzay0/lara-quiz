<?php

namespace App\DTO;

final class ChoiceDTO
{
    public string $uuid;
    public string $text;
    public bool $isCorrect;

    public function __construct(
        string $uuid,
        string $text,
        bool $isCorrect
    ) {
        $this->uuid = $uuid;
        $this->text = $text;
        $this->isCorrect = $isCorrect;
    }

    public function getUUID()
    {
        return $this->uuid;
    }

    public function getText()
    {
        return $this->text;
    }

    public function isCorrect()
    {
        return $this->isCorrect;
    }
}
