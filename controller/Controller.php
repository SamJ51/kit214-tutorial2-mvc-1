<?php
//enable php errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once("model/Model.php");  
include_once("view/ViewCustomerList.php");
include_once("view/ViewCustomerTable.php");
include_once("view/ViewBackToHome.php");
include_once("view/ViewSearchBox.php");
  
class Controller 
{
     public const ACTION_VIEW_ALL = 1;
     public const ACTION_VIEW_ONE = 2;
     public const ACTION_SEARCH = 3;
     public $model;   

     public function __construct()    
     {    
          $this->model = new Model();  
     }   

     // Added an $action parameter to distinguish different action types
     // Added a $search parameter to allow searching for a specific customer
     public function execute($action, $search = NULL)
     {
     $viewSearchBox = new ViewSearchBox();
     $viewSearchBox->output();

     if ($action == self::ACTION_VIEW_ALL) {
          $customers = $this->model->getCustomerList();
     } else if ($action == self::ACTION_VIEW_ONE) {
          $viewBack = new ViewBackToHome();
          $viewBack->output();

          if ($search == null) {
               echo "No search term entered";
               return;
          }

          $customers = $this->model->getCustomerByID($search);
     } else if ($action == self::ACTION_SEARCH) {
          $viewBack = new ViewBackToHome();
          $viewBack->output();

          if ($search == null) {
               echo "No search term entered";
               return;
          }

          $customers = $this->model->getCustomerByName($search);
     }

     $view = new ViewCustomerTable();
     $view->output($customers);
     }
}