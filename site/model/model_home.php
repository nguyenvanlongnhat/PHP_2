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
        function getName($getIdNSX){
            $sql = "SELECT tenNSX from nhasanxuat where idNSX = $getIdNSX";
            $kq = $this->query($sql);
            return $kq;
        }
        function getProduct($getIdProduct){
            $sql = "SELECT dienthoai.idDT, dienthoai.soLanXem, dienthoai.moTa, dienthoai.tenDT, dienthoai.gia, dienthoai.giaKM, dienthoai.urlHinh, nhasanxuat.tenNSX, nhasanxuat.idNSX from dienthoai, nhasanxuat where dienthoai.idDT = $getIdProduct and dienthoai.idNSX=nhasanxuat.idNSX";
            $kq = $this->query($sql);
            return $kq;
        }
        function getProductNSX($getIdNSX){
            $sql = "SELECT * from dienthoai where idNSX = $getIdNSX";
            $kq = $this->query($sql);
            return $kq;
        }
        function getThuocTinh($getIdProduct){
            $sql = "SELECT * from thuoctinhdt where idDT = $getIdProduct";
            $kq = $this->query($sql);
            return $kq;
        }
        function getSeller(){
            $sql = "SELECT * from dienthoai";
            $kq = $this->query($sql);
            return $kq;
        }
        function getComment($getIdProduct){
            $sql = "SELECT binhluan.noiDungBl, binhluan.thoiDiemBL, users.userName  from binhluan inner join users on binhluan.idUser = users.idUser where binhluan.idDT = $getIdProduct";
            $kq = $this->query($sql);
            return $kq;
        }
        function increView($getIdProduct, $soLanXem){
            $sql = "UPDATE dienthoai set soLanXem = '$soLanXem' where idDT =".$getIdProduct;
            $kq = $this->execute($sql);
            return $kq;
        }
        function formatMoney($number, $fractional=false) {  
            if ($fractional) {  
                $number = sprintf('%.2f', $number);  
            }  
            while (true) {  
                $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);  
                if ($replaced != $number) {  
                    $number = $replaced;  
                } else {  
                    break;  
                }  
            }  
            return $number;  
        }
    }

?>