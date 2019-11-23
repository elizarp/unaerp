<?php

class StatsModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (Exception $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/heroes.php for more)
     */
    public function getAmountOfHeroes()
    {
        $sql = "SELECT COUNT(id) AS amount_of_heroes FROM hero";
        
        if (!$result = $this->db->query($sql)){
            echo("Error description: " . $this->db->error);
        }

        $row = $result->fetch_array(MYSQLI_ASSOC);
        return $row["amount_of_heroes"];
    }
}
