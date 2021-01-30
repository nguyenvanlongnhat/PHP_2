<?php 
include_once './model/model_nhasanxuat.php';
// class model_nhasanxuat extends model_system {
//     function getList(){
//         $sql="SELECT * from dienthoai ";
//         $kq= $this->query($sql);
//         return $kq;
//     }
// }  $nhasanxuat = new model_nhasanxuat;

//     $getList = $nhasanxuat -> getList();
//     foreach ($getList as $list) {
//         echo $list["tenDT"];
//     }

    class nhasanxuat {
        function __construct(){
            $this->model = new model_nhasanxuat;
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
                
                default:
                    # code...
                    break;
            }
        }
        function index(){
            $getNhasanxuat = $this->model->getNhasanxuat();
            $page_file = "../admin/view/admin/dsnsx.php";
            require_once "../admin/layout.php";
        }
        function add(){
            if (isset($_POST["submit"]) && $_POST["submit"]) {
                $this->model->addProducer($_POST["tennsx"], $_POST["sttnsx"]);
            }
            $page_file = "../admin/view/admin/themnsx.php";
            require_once "../admin/layout.php";
        }
    }             

?>