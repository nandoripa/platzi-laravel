<?php

namespace PlatziPHP;

class Author extends User
{

    public function __construct($email, $password)
    {
        parent::__construct($email, $password);
    }
}
