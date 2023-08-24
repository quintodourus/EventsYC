<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class User
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string|NULL $email
 * @property int|NULL $age
 * @property string|NULL $sex
 * @property string|NULL $city
 * @property array|NULL $preferences
 * @property string $password
 * @property bool $isRoot
 * @property Carbon|NULL $last_activity_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|NULL $deleted_at
 * @property Collection|Event[] $own_events
 * @property Collection|Event[] $part_events
 * @package App\Models
 * @method static where(string $string1, string $operator, string $string3)
 */
class User extends Authenticatable
{
    use HasFactory, SoftDeletes;

    /*** @var string[] */
    protected $dates = ['last_activity_at', 'created_at', 'updated_at', 'deleted_at'];

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /*** @param string $first_name */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /*** @return string */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /*** @param string $last_name */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /*** @return string */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /*** @param string $phone */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /*** @return string|NULL */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /*** @param string|NULL $email */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /*** @return int|NULL */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /*** @param int|NULL $age */
    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    /*** @return string|NULL */
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /*** @param string|NULL $sex */
    public function setSex(?string $sex): void
    {
        $this->sex = $sex;
    }

    /*** @return string|NULL */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /*** @param string|NULL $city */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /*** @return array|NULL */
    public function getPreferences(): ?array
    {
        return $this->preferences;
    }

    /*** @param array|NULL $preferences */
    public function setPreferences(?array $preferences): void
    {
        $this->preferences = $preferences;
    }

    /*** @return string */
    public function getPassword(): string
    {
        return $this->password;
    }

    /*** @param string $password */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /*** @return bool */
    public function isRoot(): bool
    {
        return $this->isRoot;
    }

    /*** @param bool $isRoot */
    public function setIsRoot(bool $isRoot = FALSE): void
    {
        $this->isRoot = $isRoot;
    }

    /*** @return Carbon|NULL */
    public function getLastActivityAt(): ?Carbon
    {
        return $this->last_activity_at;
    }

    /*** @param Carbon|NULL $last_activity_at */
    public function setLastActivityAt(?Carbon $last_activity_at): void
    {
        $this->last_activity_at = $last_activity_at;
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

    /*** @return Carbon|NULL */
    public function getDeletedAt(): ?Carbon
    {
        return $this->deleted_at;
    }

    /*** @param Carbon|NULL $deleted_at */
    public function setDeletedAt(?Carbon $deleted_at): void
    {
        $this->deleted_at = $deleted_at;
    }

    /*** @return bool */
    public function isDeleted(): bool
    {
        return $this->getDeletedAt() !== NULL;
    }

    /*** @return Collection */
    public function getOwnEvents(): Collection
    {
        return $this->belongsToMany(Event::class, 'user_events')
            ->wherePivot('is_user_organizer', '=', TRUE)
            ->get();
    }

    /*** @return Collection */
    public function getAllUserEvents(): Collection
    {
        return $this->belongsToMany(Event::class, 'user_events')->get();
    }
}
