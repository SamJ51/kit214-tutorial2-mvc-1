<?php
//enable php errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include_once("model/Model.php");  
include_once("view/ViewCustomerList.php");
include_once("view/ViewCustomerTable.php");
include_once("view/ViewBackToHome.php");
  
class Controller 
{  
     public const ACTION_VIEW_ALL = 1;
     public const ACTION_VIEW_ONE = 2;

     public $model;   

     public function __construct()    
     {    
          $this->model = new Model();  
     }   
      
     public function execute($action, $search = NULL)  
     {  
          if ($action == self::ACTION_VIEW_ALL)
          {
		     $customers = $this->model->getCustomerList();  
          }
          else if ($action == self::ACTION_VIEW_ONE)
          {
               $viewBack = new ViewBackToHome();
               $viewBack->output();

               if ($search == null)
               {
                    echo "No search term entered";
                    return;
               }

               $customers = $this->model->getCustomerByID($search);  
          }

          $view = new ViewCustomerTable();
          //or
          //$view = new ViewCustomerList();

          $view->output($customers);
     }  
}  

?>