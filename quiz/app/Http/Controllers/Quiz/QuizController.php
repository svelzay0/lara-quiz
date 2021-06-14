<?php

namespace App\Http\Controllers\Quiz;

use App\Http\Controllers\Controller;
use App\Service\QuizResultService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $service;

    public function __construct(QuizResultService $service)
    {
        $this->service = $service;
    }

    public function getQuiz ()
    {
        return $this->service->getQuiz();
    }

    public function getResults (Request $request)
    {
        return $this->service->getResult($request);
    }

}
