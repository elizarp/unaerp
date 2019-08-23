<?php
    # print_r($_REQUEST);
    // Displays the data that was received from the input box named myNameIsEneas in the form
    echo ($_REQUEST['myNameIsEneas']);
 ?>
 
 <html>
    <body>
        <form action="self_request.php" method=POST>
            Name:<br><input type="text" name="myNameIsEneas"><br>
            <input type="submit" value="Submit">
        </form>
    </body>
 </html>