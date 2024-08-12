<?php
// include controller  
include_once("controller/Controller.php");  
  
//Initilize controller
$controller = new Controller();  

//Run logic
if (isset($_GET['customer'])) {
    $controller->execute(Controller::ACTION_VIEW_ONE, $_GET['customer']);
} else if (isset($_GET['search'])) {
    echo "Search term: " . htmlspecialchars($_GET['search']);
    $controller->execute(Controller::ACTION_SEARCH, $_GET['search']);
} else {
    $controller->execute(Controller::ACTION_VIEW_ALL);
}

?>