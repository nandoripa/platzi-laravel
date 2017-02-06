<?php

namespace PlatziPHP\Domain;


class EntityNotFound extends \Exception
{
    private $id;

    public function  __construct($id, $message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}