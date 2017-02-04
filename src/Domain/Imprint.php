<?php

namespace PlatziPHP\Domain;

use PlatziPHP\Infrastructure\FakeDatabase;

class Imprint
{

    /**
     * @type FakeDatabase
     */
    private $database;

    /**
     * Imprint constructor.
     * @param FakeDatabase $database
     */
    public function __construct(FakeDatabase $database)
    {
        $this->database = $database;
    }

    /**
     * Get a published posts collection
     * @return \Illuminate\Support\Collection
     */
    public function listPublishedPosts()
    {
        return $this->database->posts();
    }
}