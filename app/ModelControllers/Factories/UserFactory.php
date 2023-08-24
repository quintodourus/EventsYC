<?php

namespace App\ModelControllers\Factories;

use App\Models\User;

/**
 * Class UserFactory
 * @package App\ModelControllers\Factories
 */
class UserFactory
{
    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $phone
     * @param string $password
     * @param string|NULL $email
     * @param int|NULL $age
     * @param string|NULL $sex
     * @param string|NULL $city
     * @param array|NULL $preferences
     * @return User
     */
    public static function create(
        string $firstName, string $lastName, string $phone, string $password, ?string $email = NULL,
        ?int $age = NULL, ?string $sex = NULL, ?string $city = NULL, ?array $preferences = NULL
    ): User
    {
        $user = new User();
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setPhone($phone);
        $user->setPassword($password);
        $user->setEmail($email);
        $user->setAge($age);
        $user->setSex($sex);
        $user->setCity($city);
        $user->setPreferences($preferences);
        $user->save();
        $user->refresh();
        return $user;
    }
}
