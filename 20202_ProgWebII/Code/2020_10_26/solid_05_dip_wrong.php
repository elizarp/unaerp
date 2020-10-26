<?php

class MySqlConnection
{
    public function connect()
    { }
}

class PageLoader
{
    private $dbConnection;
    public function __construct(MySqlConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
