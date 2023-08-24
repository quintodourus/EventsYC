<?php

namespace App\Exceptions;

use Exception;

/**
 * Class EventNotFoundException
 * @package App\Exceptions
 */
class EventNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Event Not Found';
}
