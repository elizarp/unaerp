<?php

interface DbConnectionInterface
{
    public function connect();
}

class MySqlConnection implements DbConnectionInterface
{
    public function connect()
    { }
}

class PageLoader
{
    private $dbConnection;
    public function __construct(DbConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
