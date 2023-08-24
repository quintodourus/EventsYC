<?php

namespace App\ModelControllers\Factories;

use App\Models\Event;
use Carbon\Carbon;
use App\ValueObjects\Constants\EventType;

/**
 * Class EventFactory
 * @package App\ModelControllers\Factories
 */
class EventFactory
{
    /**
     * @param string $title
     * @param Carbon $date
     * @param string $city
     * @param string $address
     * @param string $eventType
     * @param int $organizerId
     * @param array|NULL $filters
     * @return Event
     */
    public static function create(
        string $title, Carbon $date, string $city, string $address,
        int $organizerId, string $eventType = EventType::OTHER, ?array $filters = NULL
    ): Event
    {
        $event = new Event();
        $event->setTitle($title);
        $event->setDate($date);
        $event->setCity($city);
        $event->setAddress($address);
        $event->setEventType($eventType);
        $event->setOrganizerId($organizerId);
        $event->setFilters($filters);
        $event->save();
        $event->refresh();
        return $event;
    }
}
