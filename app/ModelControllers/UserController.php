<?php

namespace App\ModelControllers;

use App\Exceptions\UserNotFoundException;
use App\ModelControllers\Repositories\UserRepository;
use App\Models\User;

/**
 * Class UserController
 * @package App\ModelControllers
 */
class UserController
{

    /*** @var UserRepository */
    private UserRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new UserRepository();
    }

    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function findById(int $id): User
    {
        return $this->repo->findById($id);
    }

    /**
     * @param string $phone
     * @return User
     * @throws UserNotFoundException
     */
    public function findByPhone(string $phone): User
    {
        return $this->repo->findByPhone($phone);
    }
}
