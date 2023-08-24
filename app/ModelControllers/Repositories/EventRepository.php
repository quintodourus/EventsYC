<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\EventNotFoundException;
use App\Models\Event;

/**
 * Class EventRepository
 * @package App\ModelControllers\Repositories
 */
class EventRepository
{
    /**
     * @param int $id
     * @return Event
     * @throws EventNotFoundException
     */
    public function findById(int $id): Event
    {
        $event = Event::where('id', '=', $id)->first();
        if($event === NULL) {
            throw new EventNotFoundException();
        }
        return $event;
    }

}
