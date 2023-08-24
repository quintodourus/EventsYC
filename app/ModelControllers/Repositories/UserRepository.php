<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\UserNotFoundException;
use App\Models\User;

/**
 * Class UserRepository
 * @package App\ModelControllers\Repositories
 */
class UserRepository
{
    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function findById(int $id): User
    {
        $user = User::where('id', '=', $id)->first();
        if($user === NULL) {
            throw new UserNotFoundException();
        }
        return $user;
    }

    /**
     * @param string $phone
     * @return User
     * @throws UserNotFoundException
     */
    public function findByPhone(string $phone): User
    {
        $user = User::where('phone', '=', $phone)->first();
        if($user === NULL) {
            throw new UserNotFoundException();
        }
        return $user;
    }
}
