<?php

use App\ModelControllers\EventController;
use App\ModelControllers\UserController;

if( ! function_exists('userController')) {
    /*** @return UserController */
    function userController(): UserController
    {
        return app('UserController');
    }
}
if( ! function_exists('eventController')) {
    /*** @return EventController */
    function eventController(): EventController
    {
        return app('EventController');
    }
}
