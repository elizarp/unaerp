<?php

/**
 * Class Heroes
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Heroes extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/heroes/index
     */
    public function index()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Heroes, using the method index().';

        // load a model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $heroes_model = $this->loadModel('HeroesModel');
        $heroes = $heroes_model->getAllHeroes();

        // load another model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_heroes = $stats_model->getAmountOfHeroes();

        // load views. within the views we can echo out $heroes and $amount_of_heroes easily
        require 'application/views/_templates/header.php';
        require 'application/views/heroes/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * ACTION: addHero
     * This method handles what happens when you move to http://yourproject/heroes/addhero
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a hero" form on heroes/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to heroes/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addHero()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Heroes, using the method addHero().';

        // if we have POST data to create a new hero entry
        if (isset($_POST["submit_add_hero"])) {
            // load model, perform an action on the model
            $heroes_model = $this->loadModel('HeroesModel');
            $heroes_model->addHero($_POST["name"], $_POST["race"],  $_POST["height"]);
        }

        // where to go after hero has been added
        header('location: ' . URL . 'heroes/index');
    }

    /**
     * ACTION: deleteHero
     * This method handles what happens when you move to http://yourproject/heroes/deletehero
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a hero" button on heroes/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to heroes/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $hero_id Id of the to-delete hero
     */
    public function deleteHero($hero_id)
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Heroes, using the method deleteHero().';

        // if we have an id of a hero that should be deleted
        if (isset($hero_id)) {
            // load model, perform an action on the model
            $heroes_model = $this->loadModel('HeroesModel');
            $heroes_model->deleteHero($hero_id);
        }

        // where to go after hero has been deleted
        header('location: ' . URL . 'heroes/index');
    }
}
