<?php

namespace PlatziPHP\Infrastructure;


use PlatziPHP\Domain\Author;

class AuthorRepository extends BaseRepository
{

    /**
     * @return string
     */
    protected function table()
    {
        return 'users';
    }

    /**
     * @param array $result
     * @return object
     */
    protected function mapEntity(array $result)
    {
        $author = new Author(
            $result['email'],
            $result['password']
        );

        $author->setName(
            $result['first_name'],
            $result['last_name']
        );
    }
}