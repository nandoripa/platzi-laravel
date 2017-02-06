<?php

namespace PlatziPHP\Domain;

use PlatziPHP\Infrastructure\PostRepository;

class Imprint
{

    /**
     * @type Postrepository
     */
    private $posts;

    /**
     * Imprint constructor.
     * @param Postrepository $repository
     */
    public function __construct(Postrepository $repository)
    {
        $this->posts = $repository;
    }

    /**
     * Get a published posts collection
     * @return \Illuminate\Support\Collection
     */
    public function listPublishedPosts()
    {
        return $this->posts->all();
    }

    /**
     * @param $id
     * @return Post
     * @throws EntityNotFound
     */
    public function findById($id)
    {
        return $this->posts->find($id);
    }
}