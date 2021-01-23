<?php 
include_once './model/model_dienthoai.php';


    class dienthoai {
        function __construct(){
            $this->model = new model_dienthoai;
            $act = 'index';
            if (isset($_GET["act"]) == true ) {
                $act = $_GET["act"];
            }
            
            switch ($act) {
                case 'index':
                    $this ->index();
                    break;
                case 'add':
                    $this ->add();
                    break;
                case 'del':
                    $this ->del();
                    break;
                case 'edit':
                    $this ->edit();
                    break;
                default:
                    # code...
                    break;
            }
        }
        function index(){
            $getList = $this->model->getList();
            $page_file = "../admin/view/admin/index.php";
            require_once "../admin/layout.php";
        }

        function add(){
            if (isset($_POST["submit"]) && $_POST["submit"]) {
                $img = $_FILES["img"]["name"];
                $target_file = "../upload/" . basename($img);
                if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
                    $err_upload = "Upload thành công!";
                }
                else{
                    $err_upload= "";
                }
            }
           
            if (isset($_POST["submit"]) && $_POST["submit"]) {
                $this->model->addProduct($_POST["name"], $_POST["gia"], $img);
            }
            $page_file = "../admin/view/admin/addnew.php";
            require_once "../admin/layout.php";
        }

        function del(){
            $id = $_GET["id"];
            $this->model->delPhone($id);
            $getList = $this->model->getList();
            $page_file = "../admin/view/admin/index.php";
            require_once "../admin/layout.php";
        }
        
        function edit(){

        }
    }             

?>