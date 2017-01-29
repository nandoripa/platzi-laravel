<?php

namespace PlatziPHP;


class Post
{
    /**
     * @type Author
     */
    private $author;

    /**
     * @type string
     */
    private $title;

    /**
     * @type string
     */
    private $body;

    /**
     * Post constructor.
     * @param Author $author
     * @param string $title
     * @param string $body
     */
    public function __construct(Author $author, $title, $body)
    {
        $this->author = $author;
        $this->title = $title;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return 'by '.$this->author->getFirstName();
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

}