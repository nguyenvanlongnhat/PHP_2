<?php

require_once '../system/model_system.php';
class model_home extends model_system {
        function getList(){
            $sql = "SELECT * from dienthoai";
            $kq = $this->query($sql);
            return $kq;
        }
        function getNSX(){
            $sql = "SELECT * from nhasanxuat";
            $kq = $this->query($sql);
            return $kq;
        }
        function getProductDetail($id){
            $sql = "SELECT * from dienthoai where idDT = $id";
            $kq = $this->query($sql);
            return $kq;
        }
    }

?>