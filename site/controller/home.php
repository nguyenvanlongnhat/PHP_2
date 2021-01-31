<?php
    require_once "model/model_home.php";
    class home {
        function __construct() {
            $this->model = new model_home();
            $act = "index";
            if (isset($_GET["act"]) && $_GET["act"]) {
                $act = $_GET["act"];
            }
            switch ($act) {
                case 'index': $this->home(); break;
                case 'detail': $this->detail(); break;
            }
        }
            function home(){
                $getList = $this->model->getList();
                $getNSX = $this->model->getNSX();
                $page_file = "../site/view/home.php";
                include_once "../site/layout.php";
            }
            function detail(){
                $getIdProduct = $_GET["id"];
                $getProduct = $this->model->getProduct($getIdProduct);
                $page_file = "../site/view/product-detail.php";
                include_once "../site/layout.php";
            }
        
    }
?>