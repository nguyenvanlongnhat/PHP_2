
<div class="home">
    <div class="homene">
        <div class="boxleft1 fontne">
                <h3 id="center1">DANH MỤC</h3>
                <div class="hr"></div>
                <ul>
                
                    <?php
                    
                        foreach ($getNSX as $dm) {
                            echo '<a href="index.php?act=product&iddm='.$dm["tenNSX"].'" class="fontne"><li class="fontne">'.$dm["tenNSX"].'</li ></a>';
                        }

                    ?>
                    
                </ul>
                
            </div>
        <div class="boxright1">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../site/view/images/slide11.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../site/view/images/slide22.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../site/view/images/slide33.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
                   
    </div>
    <div class="show-product">
    
            <h3 class="fontne">Mua nhiều</h3>
            
       
        <div class="hr"></div>
        <div class="list-product ">
            <?php 
            // $dssp = dssp_home(1);
            // $dem = 0;
            
            //     foreach ($dssp as $dssp) {
            //         $gia = $dssp["price"];
            //         if ($dssp["price_discount"] > 0) {
            //             $giagiam = $dssp["price_discount"];
            //             $price_discount = formatMoney($giagiam);
            //             $price = $price_discount;
            //             $price_discount = formatMoney($gia);
            //         }
            //         else {
            //             $price_discount = "";
            //             $price = formatMoney($gia);
            //         }
                    
                    
                    
            //         $dem++;
            //         if ($dssp["price_discount"] > 0) {
            //             $discount = (($dssp["price"] - $dssp["price_discount"]) / $dssp["price"] )*100;
            //         }
            //         else {
            //             $discount = 0;
            //         }
            //         if ($dem % 5 !=0) {
            //             $mrgight = "mr-4";
            //         }
            //         else {
            //             $mrgight = "";
            //         }
                    
            //         echo '<div class="product '.$mrgight.'">
            //         <div class="img-product">
            //         <a href="index.php?act=detail&id='.$dssp["id"].'"> <img src="../upload/'.$dssp["img"].'" alt=""> </a>
            //         <div class="discount fontne">'.ceil($discount).'%</div>
            //         </div>
            //         <div class="content">';
            //         $dsdm = dsdm($dssp["iddm"]);
            //         foreach ($dsdm as $dsdm) {
            //             echo '<span>'.$dsdm["name"].'</span>';}
            //         echo '    <p>'.$dssp["name"].'</p>
            //             <p1>'.$price.' <span style="color:red;margin-left:10px;text-decoration: line-through;">'.$price_discount.'</span></p1>
            //         </div>
            //     </div> </a>' ;
            //         }
                        
                
            ?>
                
        </div>
    </div>
    <div class="show-product">
    
    <h3 class="fontne">Khuyến mãi </h3>
    

<div class="hr"></div>
<div class="list-product ">
<?php 
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
            $dem = 0;
            
                foreach ($getList as $dssp) {
                    $gia = $dssp["gia"];
                    if ($dssp["giaKM"] > 0) {
                        $giagiam = $dssp["giaKM"];
                        $price_discount = formatMoney($giagiam);
                        $price = $price_discount;
                        $price_discount = formatMoney($gia);
                    }
                    else {
                        $price_discount = "";
                        $price = formatMoney($gia);
                    }
                    
                    
                    
                    $dem++;
                    // if ($dssp["price_discount"] > 0) {
                    //     $discount = (($dssp["price"] - $dssp["price_discount"]) / $dssp["price"] )*100;
                    // }
                    // else {
                    //     $discount = 0;
                    // }
                    if ($dem % 5 !=0) {
                        $mrgight = "mr-4";
                    }
                    else {
                        $mrgight = "";
                    }
                    
                    echo '<div class="product '.$mrgight.'">
                    <div class="img-product">
                    <a href="index.php?act=detail&id='.$dssp["idDT"].'"> <img src="../upload/'.$dssp["urlHinh"].'" alt=""> </a>
                    <div class="discount fontne">10%</div>
                    </div>
                    <div class="content">';
                  
                    echo '    <p>'.$dssp["tenDT"].'</p>
                    <p1>'.$price.' <span style="color:red;margin-left:10px;text-decoration: line-through;">'.$price_discount.'</span></p1>
                    </div>
                </div> </a>' ;
                    }
                   
                
                        
                
            ?>
        
</div>
</div>
</div>
