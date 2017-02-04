<?php

namespace PlatziPHP\Domain;

/**
 *
 */
class User
{

  /**
  * @type string
  */
  private $email;

  /**
  * @type string
  */
  private $password;

  /**
  * @type string
  */
  private $firstName;

  /**
  * @type string
  */
  private $lastName;

  /**
  * @param string $email
  * @param string $password
  */
  public function __construct($email, $password)
  {
    $this->email = $email;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  /**
   * @return string
   */
  public function getFirstName()
  {
    return $this->firstName;
  }

  /**
  * @param string $firstName
  */
  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  /**
  * @return string
  */
  public function getLastName()
  {
    return $this->lastName;
  }

  /**
  * @param string $lastName
  */
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param string $firstname
     * @param string $lastname
     */
    public function setName($firstname, $lastname)
    {
        $this->firstName = $firstname;
        $this->lastName = $lastname;
    }

}
