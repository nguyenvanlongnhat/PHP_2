<?php
require_once '../system/model_system.php';
class model_home extends model_system {
        function getList(){
            $sql = "SELECT * from dienthoai";
            $kq = $this->query($sql);
            return $kq;
        }
        function getNSX(){
            $sql = "SELECT * from nhasanxuat ";
            $kq = $this->query($sql);
            return $kq;
        }
        function getProduct($getIdProduct){
            $sql = "SELECT dienthoai.idDT, dienthoai.soLanXem, dienthoai.moTa, dienthoai.tenDT, dienthoai.gia, dienthoai.giaKM, dienthoai.urlHinh, nhasanxuat.tenNSX from dienthoai, nhasanxuat where dienthoai.idDT = $getIdProduct and dienthoai.idNSX=nhasanxuat.idNSX";
            $kq = $this->query($sql);
            return $kq;
        }
        function getThuocTinh($getIdProduct){
            $sql = "SELECT * from thuoctinhdt where idDT = $getIdProduct";
            $kq = $this->query($sql);
            return $kq;
        }
        function increView($getIdProduct, $soLanXem){
            $sql = "UPDATE dienthoai set soLanXem = '$soLanXem' where idDT =".$getIdProduct;
            $kq = $this->execute($sql);
            return $kq;
        }
    }

?>