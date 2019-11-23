<?php

/**
 * This is the "base controller class". All other "real" controllers extend this class.
 */
class Controller
{
    /**
     * @var null Database Connection
     */
    public $db = null;

    /**
     * Whenever a controller is created, open a database connection too. The idea behind is to have ONE connection
     * that can be used by multiple models (there are frameworks that open one connection per model).
     */
    function __construct()
    {
        $this->openDatabaseConnection();
    }

    /**
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // Open connection
        $this->db = mysqli_connect('127.0.0.1','newuser','p@$$w0rd','php-mvc-exemplo');

        // Check connection
        if ($this->db->connect_errno) 
        {
            echo "Failed to connect to MySQL: " . $conn->connect_error();
        }
    }

    /**
     * Load the model with the given name.
     * loadModel("HeroModel") would include models/heromodel.php and create the object in the controller, like this:
     * $heroes_model = $this->loadModel('HeroesModel');
     * Note that the model class name is written in "CamelCase", the model's filename is the same in lowercase letters
     * @param string $model_name The name of the model
     * @return object model
     */
    public function loadModel($model_name)
    {
        require 'application/models/' . strtolower($model_name) . '.php';
        // return new model (and pass the database connection to the model)
        return new $model_name($this->db);
    }
}
