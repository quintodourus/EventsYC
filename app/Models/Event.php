<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * @property int $id
 * @property string $title
 * @property Carbon $date
 * @property string $city
 * @property string $address
 * @property string $event_type
 * @property int $organizer_id
 * @property array|NULL $filters
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Collection|User[] $people
 * @package App\Models
 * @method static where(string $string1, string $operator, string $string3)
 */
class Event extends Model
{
    use HasFactory;

    /*** @var string[] */
    protected $dates = ['created_at', 'updated_at'];

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getTitle(): string
    {
        return $this->title;
    }

    /*** @param string $title */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /*** @return Carbon */
    public function getDate(): Carbon
    {
        return $this->date;
    }

    /*** @param Carbon $date */
    public function setDate(Carbon $date): void
    {
        $this->date = $date;
    }

    /*** @return string */
    public function getCity(): string
    {
        return $this->city;
    }

    /*** @param string $city */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /*** @return string */
    public function getAddress(): string
    {
        return $this->address;
    }

    /*** @param string $address */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /*** @return string */
    public function getEventType(): string
    {
        return $this->event_type;
    }

    /*** @param string $event_type */
    public function setEventType(string $event_type): void
    {
        $this->event_type = $event_type;
    }

    /*** @return int */
    public function getOrganizerId(): int
    {
        return $this->organizer_id;
    }

    /*** @param int $organizer_id */
    public function setOrganizerId(int $organizer_id): void
    {
        $this->organizer_id = $organizer_id;
    }

    /*** @return array|NULL */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /*** @param array|NULL $filters */
    public function setFilters(?array $filters): void
    {
        $this->filters = $filters;
    }

    /*** @return Carbon */
    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    /*** @return Carbon */
    public function getUpdatedAt(): Carbon
    {
        return $this->updated_at;
    }

    /*** @return Collection */
    public function getPeople(): Collection
    {
        return $this->belongsToMany(User::class, 'user_events')->get();
    }
}
