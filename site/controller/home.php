<?php
    include_once "./model/model_home.php";

    class home {
        function __construct() {
            $this->model = new model_home;
            $act = "index";
            if (isset($_GET["act"]) && $_GET["act"]) {
                $act = $_GET["act"];
            }
            switch ($act) {
                case 'index':
                   
                    $getList = $this->model->getList();
                    $getNSX = $this->model->getNSX();
                    $page_file = "../site/view/home.php";
                    include_once "../site/layout.php";
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
?>