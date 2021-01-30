<div id="page-wrapper" class="gray-bg">
      
      

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row fontne">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">
                            <div class="link" style="margin-top:50px; margin-left: 60px; border-bottom:1px #dbd7d7 solid; width: 600px;color:  rgb(105, 105, 105);">
                                <?php 
                                $dssp1 = dsspid($_GET["id"]);
                                    foreach ($dssp1 as $dssp) {
                                        $dsdm = dsdm($dssp["iddm"]);
                                        foreach ($dsdm as $dsdm) {
                                            
                                            echo '<h3 class="font-bold m-b-xs fontne" style="color: rgb(105, 105, 105);
                                            font-size: 21px;
                                            font-weight: 500;">
                                       
                                          
                                            Home &nbsp; / &nbsp;  '.$dsdm["name"].' &nbsp; /&nbsp;   '.$dssp["name"].'</h3>';
                                        }
                                    }
                                ?>
                            </div>
                            
                            
                            <div class="row" style="margin-top: -100px">
                                <div class="col-md-5" style="margin-top:150px">


                                    <div class="product-images">

                                        <div>
                                            <div class="image-imitation">
                                                <?php 
                                                $dssp = dsspid($_GET["id"]);
                                                foreach ($dssp as $dssp) {
                                                    echo ' <img src="../upload/'.$dssp["img"].'" alt="">';
                                                }
                                                    
                                                ?>
                                               
                                            </div>
                                        </div>
                                        >
                                        </div>


                                    </div>

                                </div>
                                <div class="col-md-6 fontne" style="margin-left:50px">

                                    <h2 class="font-bold m-b-xs fontne" >
                                        <?php 
                                            $dssp = dsspid($_GET["id"]);
                                            foreach ($dssp as $dssp2) {
                                                echo $dssp2["name"];
                                            }
                                        ?>
                                    </h2>
                            
                                    <div class="m-t-md">
                                        <h2 class="product-main-price fontne" style="color: rgb(51, 51, 51); font-size: 23px">
                                        <?php 
                                            $dssp = dsspid($_GET["id"]);
                                            foreach ($dssp as $dssp2) {
                                                $gia = $dssp2["price"];
                                                if ($dssp2["price_discount"] > 0) {
                                                    $giagiam = $dssp2["price_discount"];
                                                    $price_discount = formatMoney($giagiam);
                                                    $price = $price_discount;
                                                    $price_discount = formatMoney($gia);
                                                    $discount = (($dssp2["price"] - $dssp2["price_discount"]) / $dssp2["price"] )*100;
                                                }
                                                else {
                                                    $price_discount = "";
                                                    $price = formatMoney($gia);
                                                    $discount = 0;
                                                }
                                               
                                               
                                                echo 'Giá: '.$price.'đ';
                                                echo '  <small class="text-muted fontne  "> <span style="color:red;margin-left:10px;text-decoration: line-through;">'.$price_discount.'đ</span></small> </h2>';
                                                echo '<div class="fontne"><hr>

                                                <h4>Tình trạng : <span class="font">&nbsp; Còn hàng</span></h4>
                                                <h4>Giảm giá : <span class="font">&nbsp; '.ceil($discount).'%</span></h4>
                                                <h4>Hãng sản xuất : <span class="font">&nbsp; Việt Nam</span></h4>
                                                
                                                
                                                
                                                
                                                <h4>Mô tả : </h4>
                                                
                                                <div class="small text-muted" style="font-size: 13px">
                                                Bánh thưởng cho chó vị bơ Vegebrand 7 Dental Effects Avocado Dental Stick là thức ăn dành riêng cho chó cưng.
                                                    <br/>
                                                    
                                                </div>
                                                
                                                <hr>
                                                </div>';
                                            }
                                        ?>
                                      
                                    </div>
                                    
                                    <div>
                                        <div class="btn-group">
                                        <a href="index.php?act=cart&id=<?php echo $_GET["id"]?>"> <button style="color:white; background-color: #1ab394; border: 0px; padding:1px"><i class="fa fa-cart-plus fontne" style="margin-right:25px; width:100%; padding:10px; color: white">Add to cart</i></button></a>  
                                            
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                      
                    </div>

                </div>
            </div>
          




        </div>
        

    </div>