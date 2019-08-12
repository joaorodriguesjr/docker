<?php

namespace App;

use PDO;

class DataAccess
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function generateUUID()
    {
        $sql = 'SELECT REPLACE(UUID(), "-", "") as `id`;';
        $statement = $this->connection->query($sql);
        return $statement->fetch();
    }
}
