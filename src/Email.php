<?php
/**
 * Created by PhpStorm.
 * User: nandoripa
 * Date: 25/1/17
 * Time: 23:29
 */

namespace PlatziPHP;


class Email
{
    /**
     * @type string
     */
    private $address;

    /**
     * Email constructor.
     * @param $address
     */
    public function __construct($address)
    {
        if($this->validateEmail($address))
        {
            $this->address = $address;
        }
        else
        {
            throw new \InvalidArgumentException("Invalid email address [$address]");
        }
    }

    /**
     * @param string $address
     * @return true if $address is a valid email address
     */
    private function validateEmail($address)
    {
        return filter_var($address, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        if($this->validateEmail($address))
        {
            $this->address = $address;
        }
        else
        {
            throw new \InvalidArgumentException("Invalid email address [$address]");
        }
    }


}