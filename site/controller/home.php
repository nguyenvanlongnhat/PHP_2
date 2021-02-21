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
                case 'list': $this->list(); break;
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
                $getThuocTinh = $this->model->getThuocTinh($getIdProduct);
                foreach ($getProduct as $product) {
                    $getIdProduct = $product['idDT'];
                    $tenNSX = $product['tenNSX'];
                    $idNSX = $product['idNSX'];
                    $tenDT = $product['tenDT'];
                    $urlHinh = $product['urlHinh'];
                    $giaKhuyenMai = $this->model->formatMoney($product['giaKM']);
                    $gia = $this->model->formatMoney($product['gia']);
                    $moTa = $product['moTa'];
                    $soLanXem = $product['soLanXem'] + 1;
                    $this->model->increView($getIdProduct, $soLanXem);
                }
                foreach ($getThuocTinh as $thuoctinh) {
                    $manHinh = $thuoctinh['manHinh'];
                    $heDieuHanh = $thuoctinh['heDieuHanh'];
                    $cameraSau = $thuoctinh['cameraSau'];
                    $cameraTruoc = $thuoctinh['cameraTruoc'];
                    $CPU = $thuoctinh['CPU'];
                    $Ram = $thuoctinh['Ram'];
                    $boNhoTrong = $thuoctinh['boNhoTrong'];
                    $theNho = $thuoctinh['theNho'];
                    $theSim = $thuoctinh['theSim'];
                    $dungLuongPin = $thuoctinh['dungLuongPin'];
                }
                $getSeller = $this->model->getSeller();
                $getComment = $this->model->getComment($getIdProduct);
                $page_file = "../site/view/product-detail.php";
                include_once "../site/layout.php";
            }
            function list(){
                $getIdNSX = $_GET["idnsx"];
                $getNameNSX = $this->model->getNSX();
                $getName = $this->model->getName($getIdNSX);
                foreach ($getName as $name) {
                    $nameNSX = $name['tenNSX'];
                }
                $getProductNSX = $this->model->getProductNSX($getIdNSX);
                $page_file = "../site/view/product-list.php";
                include_once "../site/layout.php";
            }
        
    }
?>