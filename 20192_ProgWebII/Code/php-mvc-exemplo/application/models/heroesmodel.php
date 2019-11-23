<?php

class HeroesModel
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
     * Get all heroes from database
     */
    public function getAllHeroes()
    {
        $sql = "SELECT id, name, race, height FROM hero";

        if (!$result = $this->db->query($sql)){
            echo("Error description: " . $this->db->error);
        }

        while($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $temp[] = $row;
        }
        return $temp;
    }

    /**
     * Add a hero to database
     * @param string $name Name
     * @param string $race Race
     * @param string $height Height
     */
    public function addHero($name, $race, $height)
    {
        // clean the input from javascript code for example
        $name = strip_tags($name);
        $race = strip_tags($race);
        $height = strip_tags($height);

        $sql = "INSERT INTO hero (name, race, height) VALUES (?,?,?)";
        
        $query = $this->db->prepare($sql);
        $query->bind_param("ssi", $name, $race, $height);
        $query->execute();
    }

    /**
     * Delete a hero in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $hero_id Id of hero
     */
    public function deleteHero($hero_id)
    {
        $sql = "DELETE FROM hero WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->bind_param("i", $hero_id);
        $query->execute();
    }

    /**
     * Get a hero from database
     */
    public function getHero($param_id)
    {
        $sql = "SELECT id, name, race, height FROM hero WHERE id = $param_id";

        if (!$result = $this->db->query($sql)){
            echo("Error description: " . $this->db->error);
        }

        while($row = $result->fetch_array(MYSQLI_ASSOC))
        {
            $temp[] = $row;
        }
        return $temp;
    }
}
