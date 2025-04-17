<?php

namespace Core;

use AllowDynamicProperties;
use PDO;

#[AllowDynamicProperties]
class Database
{
    public PDO $connection;

    public false|\PDOStatement $statement;
    public function __construct($config)
    {
        $total_config = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($total_config);
    }

    public function query($query, $params = []): Database
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function get(): array
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }
        return $result;
    }

    public function find()
    {
        return $this->statement->fetch();
    }
}
