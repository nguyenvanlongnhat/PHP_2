<?php 
    require_once '../system/model_system.php';
    class model_dienthoai extends model_system {
        function getList(){
            $sql="SELECT * from dienthoai ";
            $kq= $this->query($sql);
            return $kq;
        }

        function addProduct($name, $price, $img){
            $sql = "INSERT INTO dienthoai (tenDT, gia, urlHinh) VALUES ('$name', '$price', '$img')";
            $kq= $this->execute($sql);
            return $kq;
            
        }
        
        function delPhone($id){
            $sql = "DELETE FROM dienthoai WHERE idDt=".$id;
            $kq= $this->execute($sql);
            return $kq;
        }
    }
    
?>