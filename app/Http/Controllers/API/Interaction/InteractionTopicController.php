<?php

namespace App\Http\Controllers\API\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Interaction\TopicRepository;

class InteractionTopicController extends Controller
{
    use JsonResponseTrait;

    public $topicRepo;

    public function __construct(TopicRepository $topicRepository)
    {
        $this->topicRepo = $topicRepository;
    }

    public function index()
    {
        $topics = $this->topicRepo->getAll();
        return $this->json(
            'All Topics',
            $topics
        );
    }

    public function getAllByCategoryID($id)
    {
        $topics = $this->topicRepo->getTopicByCategoryID($id);

        return $this->json(
            'All Topics',
            $topics
        );
    }
}
