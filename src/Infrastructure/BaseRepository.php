<?php
/**
 * Created by PhpStorm.
 * User: nandoripa
 * Date: 5/2/17
 * Time: 9:41
 */

namespace PlatziPHP\Infrastructure;


use PlatziPHP\Domain\EntityNotFound;

abstract class BaseRepository
{
    private static $pdo;

    /**
     * @return string
     */
    abstract protected function table();

    /**
     * @param array $result
     * @return object
     */
    abstract protected function mapEntity(array $result);

    /**
     * @return \PDO
     */
    protected function getPDO()
    {
        if (! self::$pdo) {
            self::$pdo = new \PDO('pgsql:host=localhost;port=5432;dbname=platziphp;user=nandoripa;password=12345');
        }

        return self::$pdo;
    }

    /**
     * @param $id
     * @return mixed
     * @throws EntityNotFound
     */
    public function find($id)
    {
        $pdo = $this->getPDO();

        $statement = $pdo->prepare(
            'SELECT * FROM '.$this->table().' WHERE id = :id'
        );

        $statement->bindParam(':id',$id, \PDO::PARAM_INT);
        $statement->execute();

        $result = $statement->fetch();

        if($result === false) {
            throw new EntityNotFound($id, $this->table() . "$id does not exists.");
        }

        return $this->mapEntity($result);
    }
}