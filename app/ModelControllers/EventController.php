<?php

namespace App\ModelControllers;

use App\Exceptions\EventNotFoundException;
use App\ModelControllers\Repositories\EventRepository;
use App\Models\Event;

/**
 * Class EventController
 * @package App\ModelControllers
 */
class EventController
{

    /*** @var EventRepository */
    private EventRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new EventRepository();
    }

    /**
     * @param int $id
     * @return Event
     * @throws EventNotFoundException
     */
    public function findById(int $id): Event
    {
        return $this->repo->findById($id);
    }

}
