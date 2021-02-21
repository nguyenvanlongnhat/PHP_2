<body class="page-init">
    
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <!-- Heros-->
      <div class="ps-section--hero"><img src="view/images/hero/02.jpg" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">PHONE</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?act=list&idnsx=<?=$idNSX?>"><?=$tenNSX ?></a></li>
                <li class="active"><?=$tenDT ?></li>
            </ol>
          </div>
        </div>
      </div>
      <div class="ps-section pt-80 pb-80">
        <div class="container">
          <div class="ps-product--detail">
            <div class="row">
                  <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 ">
                    <div class="ps-product__thumbnail">
                      <div class="ps-badge"><span>50%</span></div>
                      <div class="owl-slider primary" data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">
                        <div class="ps-product__image"><a href="view/images/cake/img-cake-12.jpg"><img src="../upload/<?=$urlHinh ?>" alt=""></a></div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 "><header>
                    <h3 class="ps-product__name"><?=$tenDT ?></h3>
                      <p class="ps-product__price"><?= $giaKhuyenMai?>VND <del><?=$gia ?>VND</del></p>
                      <div class="row">
                      <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12 ">
                        <div class="card">
                            <div class="card-header">
                              <h3>KHUYẾN MÃI
                              </h3>
                              <p>Giá và khuyến mãi dự kiến áp dụng đến 23:00 05/02</p>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">Giảm giá 700,000đ khi tham gia thu cũ đổi mới.</p>
                              <p class="card-text">Mua Đồng hồ thời trang giảm 40% (không kèm khuyến mãi khác)</p>
                              <a href="#" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                          </div>
                        </div>
                      </div><br>
                      <div class="ps-product__shop">
                      <div class="form-group--number">
                                            <button class="minus"><span onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepDown()">-</span></button>
                                            <input class="form-control" type="number" value="1" min="1" max="100">
                                            <button class="plus"><span onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepUp()">+</span></button>
                                        </div>
                        <ul class="ps-product__action">
                          <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                          <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                        </ul>
                      </div>
                    </header> <footer>
                      <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 "><a class="ps-btn--fullwidth ps-btn" href="#">Mua ngay<i class="fa fa-angle-right"></i></a>
                            </div>
                      </div>
                    </footer></div>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
              <br><br>
                <div class="card">
                      <div class="card-header">
                        <h3>ƯU ĐÃI THÊM
                        </h3>
                        <p>Giá và khuyến mãi dự kiến áp dụng đến 23:00 05/02</p>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">Tặng cho khách lần đầu mua hàng online.</p>
                        <p class="card-text">100.000đ để mua đơn hàng BachhoaXANH từ 300.000đ</p>
                        <p class="card-text">Áp dụng tại Tp.HCM và 1 số khu vực, 1 SĐT nhận 1 lần</p>
                        <p class="card-text">Bộ sản phẩm gồm: Hộp, Sạc, Sách hướng dẫn, Cáp, Cây lấy sim, Ốp lưng</p>
                        <p class="card-text">Bảo hành chính hãng 12 tháng.</p>
                        <p class="card-text">Lỗi là đổi mới trong 1 tháng tại hơn 2438 siêu thị toàn quốc</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                      </div>
                    </div>
                  </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                      <header>
                      <h2>Thông số kỹ thuật</h2>
                        <ul style="border: 0.5px black solid; text-align: center;">
                          <li style="margin-top: 15px"><b>Màn hình</b>: <?=$manHinh ?></li>
                          <hr>
                          <li><b>Hệ điều hành</b>: <?=$heDieuHanh ?></li><hr>
                          <li><b>Camera sau</b>: <?=$cameraSau ?></li><hr>
                          <li><b>Camera trước</b>: <?=$cameraTruoc ?></li><hr>
                          <li><b>CPU</b>: <?=$CPU ?></li><hr>
                          <li><b>Ram</b>: <?=$Ram ?></li><hr>
                          <li><b>Bộ nhớ trong</b>: <?=$boNhoTrong ?></li><hr>
                          <li><b>Thẻ nhớ</b>: <?=$theNho ?></li><hr>
                          <li><b>Thẻ sim</b>: <?=$theSim ?></li><hr>
                          <li style="margin-bottom: 15px"><b>Dung lượng pin</b>: <?=$dungLuongPin ?></li>
                        </ul>
                        
                      </header>
                    
                    </div>
            </div>
            <div class="ps-product__info">
              <ul class="tab-list" role="tablist">
                <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Mô tả</a></li>
                <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Bình Luận</a></li>
              </ul>
            </div>
            <div class="tab-content mb-60">
              <div class="tab-pane active" role="tabpanel" id="tab_01">
                <p><?=$moTa?></p>
              </div>
              <div class="tab-pane" role="tabpanel" id="tab_02">
                  <ul class="list-unstyled">
                    <?php foreach ($getComment as $comment) {
                        $name = $comment['userName'];
                        $time = $comment['thoiDiemBL'];
                        $text = $comment['noiDungBl'];

                        echo'<li class="media">
                              <div class="ps-review-box__thumbnail"><img src="view/images/blog/people.png" class="mr-3" alt="..."></div>
                                <div class="media-body">
                                <h3 class="mt-0 mb-0"><strong>'.$name.'</strong><p>'.$time.'</p></h3>
                                  <p>'.$text.'</p>
                                </div>
                              </li>';
                    } ?>
                    <!-- <li class="media">
                    <div class="ps-review-box__thumbnail"><img src="view/images/blog/people.png" class="mr-3" alt="..."></div>
                      <div class="media-body">
                      <h3 class="mt-0 mb-0"><strong>Media heading</strong><p>2020/11/01</p></h3>
                        <p>Are you brave enough to let me see your peacock? There’s no going back. This is the last time you say, after the last line you break. At the eh-end of it all.</p>
                      </div>
                    </li>
                    <li class="media">
                    <div class="ps-review-box__thumbnail"><img src="view/images/blog/people.png" class="mr-3" alt="..."></div>
                      <div class="media-body">
                      <h3 class="mt-0 mb-1"><strong>Media heading</strong><p>2020/11/01</p></h3>
                        <p>Are you brave enough to let me see your peacock? There’s no going back. This is the last time you say, after the last line you break. At the eh-end of it all.</p>
                      </div>
                    </li>
                    <li class="media">
                    <div class="ps-review-box__thumbnail"><img src="view/images/blog/people.png" class="mr-3" alt="..."></div>
                      <div class="media-body">
                      <h3 class="mt-0 mb-1"><strong>Media heading</strong><p>2020/11/01</p></h3>
                        <p>Are you brave enough to let me see your peacock? There’s no going back. This is the last time you say, after the last line you break. At the eh-end of it all.</p>
                      </div>
                    </li> -->
                  </ul>
                <form class="ps-product__review mt-10" action="_action" method="post">
                  <h4>BÌNH LUẬN</h4>
                  <div class="row">
                        <div class="col-lg-1 "><div class="ps-review-box__thumbnail"><img src="view/images/blog/people.png" class="mr-3" alt="..."></div></div>
                        <div class="col-lg-1 "><h3 class="mt-20 mb-1 mr-0"><strong>Media</strong></h3></div>
                        <div class="col-lg-8">
                          <div class="form-group">
                            <textarea class="form-control" rows="2"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-2">
                          <div class="form-group">
                            <button class="ps-btn ps-btn--sm mt-10">Bình luận</button>
                          </div></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="ps-section ps-section--best-seller pt-10 pb-100">
        <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h3 class="ps-section__title ps-section__title--full">BEST SELLER</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="100000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              <?php 
                  foreach ($getSeller as $seller) {
                      $img = $seller['urlHinh'];
                      $tenDT = $seller['tenDT'];
                      $idDT = $seller['idDT'];
                      $gia = $this->model->formatMoney($seller['gia']);

                      echo '<div class="ps-product">
                            <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="index.php?act=detail&id='.$idDT.'"></a><img src="../upload/'.$img.'" alt="">
                              <ul class="ps-product__action">
                                <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                                <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                              </ul>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="index.php?act=detail&id='.$idDT.'"><strong>'.$tenDT.'</strong></a></div>
                              <p class="ps-product__price" style="text-align: center";>'.$gia.'VND</p>
                            </div>';
                  }
              ?>
            </div>
          </div>
        </div>
      </section>
  </body>