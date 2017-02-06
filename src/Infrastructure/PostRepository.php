<?php

namespace PlatziPHP\Infrastructure;


use Illuminate\Support\Collection;
use PlatziPHP\Domain\EntityNotFound;
use PlatziPHP\Domain\Post;

class PostRepository extends BaseRepository
{

    /**
     * @return Collection
     */
    public function all()
    {
        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM posts'
        );

        $statement->execute();

        return $this->mapToPosts($statement->fetchAll());
    }

    /**
     * @param string $query
     * @return Post Collection
     */
    public function search($query)
    {

        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM posts WHERE title LIKE :query OR body LIKE :query'
        );

        $query = "%$query%";
        $statement->bindParam(':query', $query, \PDO::PARAM_STR);
        $statement->execute();

        $result = $statement->fetchAll();

        return $this->mapToPosts($result);

    }

    /**
     * @param array $results
     * @return Collection of Post
     */
    private function mapToPosts(array $results)
    {
        $posts = new Collection();

        foreach ($results as $result)
        {
            $post = $this->mapEntity($result);

            $posts->push($post);
        }

        return $posts;
    }

    /**
     * @return string
     */
    protected function table()
    {
        return 'posts';
    }

    /**
     * @param array $result
     * @return object
     */
    protected function mapEntity(array $result)
    {
        $post = new Post(
        $result['author_id'],
        $result['title'],
        $result['body'],
        $result['id']
         );

        return $post;
    }
}