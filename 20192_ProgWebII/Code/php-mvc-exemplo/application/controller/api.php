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
class API extends Controller
{
    /**
     * PAGE: heroes
     * This method handles what happens when you move to http://yourproject/api/heroes
     */
    public function heroes($param_id = null)
    {
        $request_method = $_SERVER["REQUEST_METHOD"];
        header('Content-Type: application/json');
        $heroes_model = $this->loadModel('HeroesModel');
        switch ($request_method) {
            case 'GET':
                
                if (!empty($param_id)) { // Retrieve Hero
                    $id = intval($param_id);
                    $hero = $heroes_model->getHero($id);
                    echo json_encode($hero);
                } else { // Retrieve All Heroes
                    $heroes = $heroes_model->getAllHeroes();
                    echo json_encode($heroes);
                }
                break;
            case 'POST':
                # https://www.php.net/manual/pt_BR/wrappers.php.php
                # php://input is a read-only stream that allows you to read raw data from the request body. 
                # In the case of POST requests, it is preferable to use php://input instead of $HTTP_RAW_POST_DATA as 
                # it does not depend on special php.ini directives. Moreover, for those cases where $HTTP_RAW_POST_DATA 
                # is not populated by default, it is a potentially less memory intensive alternative to activating 
                # always_populate_raw_post_data. php://input is not available with enctype="multipart/form-data".
                $data = json_decode(file_get_contents('php://input'), true);
                var_dump($data);
                header("HTTP/1.0 201 Created",true,201);
                break;
            default:
                // Invalid Request Method
                header("HTTP/1.0 405 Method Not Allowed");
                break;
        }
        
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
