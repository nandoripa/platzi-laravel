<?php
namespace PlatziPHP\Domain;

class Author extends User
{

    /**
     * Author constructor.
     * @param string $email
     * @param string $password
     */
    public function __construct($email, $password)
    {
        parent::__construct($email, $password);
    }
}
