<?php 
    require_once '../system/model_system.php';
    class model_nhasanxuat extends model_system {
        function getNhasanxuat(){
            $sql="SELECT * from nhasanxuat ";
            $kq= $this->query($sql);
            return $kq;
        }
        function addProducer($name, $stt){
            $sql = "INSERT INTO nhasanxuat (tenNSX, thuTu) VALUES ('$name', '$stt')";
            $kq= $this->execute($sql);
            return $kq;
            
        }
    }
    
?>