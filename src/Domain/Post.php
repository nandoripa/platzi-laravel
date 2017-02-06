<?php
namespace PlatziPHP\Domain;


use PlatziPHP\Infrastructure\AuthorRepository;

class Post
{

    /**
     * @type integer
     */
    private $id;

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
     * @param object $author
     * @param string $title
     * @param string $body
     * @param integer id
     */
    public function __construct($author, $title, $body, $id = null)
    {
        $this->author = $this->setAuthor($author);
        $this->title = $title;
        $this->body = $body;
        $this->id = $id;
    }

    public static function create(Author $author, $title, $body)
    {
        $post = new Post($author, $title, $body);
        $post->author = $author;
        $post->title = $title;
        $post->body = $body;
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
        return $this->author->getFirstName();
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        if($author instanceof Author) {
            $this->author = $author;
        } else {
            $repository = new AuthorRepository();
            $this->author = $repository->find($author);
        }
    }

}