<?php

class MyView{

    public function render($message) {
        // load template from html
        $html = file_get_contents('view/html/View.html');
        
        //replace {message}
        $html = str_replace('{message}', $message, $html);

        //send HTML to output
        print $html;

	}
}
