<?php

require_once 'model/MyModel.php'; 
require_once 'view/MyView.php'; 

class MyController {
	
	public function index() {
		$myModel = new MyModel(); 
		$myView = new MyView();

		$returnModel = $myModel->getText("Testando");
		
		$myView->render($returnModel);
	}
}
