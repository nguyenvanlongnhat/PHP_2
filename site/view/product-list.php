<body class="page-init">
    <div class="ps-searchbox">
      <div class="ps-searchbox__remove"><i class="fa fa-remove"></i></div>
      <div class="container">
        <header>
          <p>Enter your keywords:</p>
          <form method="post" action="/product-grid.html">
            <input class="form-control" type="text" placeholder="">
            <button><i class="ps-icon--search"></i></button>
          </form>
        </header>
        <div class="ps-searchbox__result">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-product--list ps-product--list-light mt-60">
                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="view/images/cake/img-cr-1.jpg" alt=""></div>
                    <div class="ps-product__content">
                      <h4 class="ps-product__title"><a href="product-detail.html">Amazin’ Glazin’</a></h4>
                      <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate.</p>
                      <p class="ps-product__price">
                        <del>£25.00</del>£15.00
                      </p><a class="ps-btn ps-btn--xs" href="cart.html">Order now<i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                  <div class="ps-product--list ps-product--list-light mt-60">
                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="view/images/cake/img-cr-2.jpg" alt=""></div>
                    <div class="ps-product__content">
                      <h4 class="ps-product__title"><a href="product-detail.html">The Crusty Croissant</a></h4>
                      <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate.</p>
                      <p class="ps-product__price">
                        <del>£25.00</del>£15.00
                      </p><a class="ps-btn ps-btn--xs" href="cart.html">Order now<i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-product--list ps-product--list-light mt-60">
                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="view/images/cake/img-cr-3.jpg" alt=""></div>
                    <div class="ps-product__content">
                      <h4 class="ps-product__title"><a href="product-detail.html">Amazin’ Glazin’</a></h4>
                      <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate.</p>
                      <p class="ps-product__price">
                        <del>£25.00</del>£15.00
                      </p><a class="ps-btn ps-btn--xs" href="cart.html">Order now<i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                  <div class="ps-product--list ps-product--list-light mt-60">
                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="view/images/cake/img-cr-4.jpg" alt=""></div>
                    <div class="ps-product__content">
                      <h4 class="ps-product__title"><a href="product-detail.html">The Crusty Croissant</a></h4>
                      <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate.</p>
                      <p class="ps-product__price">
                        <del>£25.00</del>£15.00
                      </p><a class="ps-btn ps-btn--xs" href="cart.html">Order now<i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>
          </div>
        </div>
        <footer class="text-center"><a class="ps-searchbox__morelink" href="product-grid.html">VIEW ALL RESULT</a></footer>
      </div>
    </div>
    <div class="header--sidebar"></div>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <!-- Heros-->
      <div class="ps-section--hero"><img src="view/images/hero/01.jpg" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">CATEGORY</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active"><?=$nameNSX ?></li>
            </ol>
          </div>
        </div>
      </div>
      <div class="ps-section--page">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
              <div class="ps-shop-grid pt-80">
                    <div class="ps-shop-features">
                      <div class="row">
                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12 "><img class="mb-30" src="../upload/banner1.jpg" alt="">
                            </div>
                      </div>
                    </div>
                    <div class="ps-shop-filter">
                      <div class="row">
                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                              <div class="form-group">
                                <label>Short by:</label>
                                <select class="ps-select" data-placeholder="Popupar product">
                                  <option value="01">Popular products</option>
                                  <option value="01">Item 01</option>
                                  <option value="02">Item 02</option>
                                  <option value="03">Item 03</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 ">
                              <div class="form-group">
                                <label>Show:</label>
                                <select class="ps-select" data-placeholder="Show:">
                                  <option value="01">SHOW</option>
                                  <option value="02">Item 02</option>
                                  <option value="03">Item 03</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 ">
                              <ul class="ps-shop-switch">
                                <li class="active"><a href="product-listing.html"><i class="fa fa-th"></i></a></li>
                                <li><a href="product-grid.html"><i class="fa fa-list"></i></a></li>
                              </ul>
                            </div>
                      </div>
                    </div>
                <div class="ps-shop ps-col-tiny">
                  <div class="row">
                      <?php foreach ($getProductNSX as $getNSX) {
                          $img = $getNSX['urlHinh'];
                          $tenDT = $getNSX['tenDT'];
                          $gia = $this->model->formatMoney($getNSX['gia']);
    
                          echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                                  <div class="ps-product">
                                  <div class="ps-product__thumbnail"><a class="ps-product__overlay" href="product-detail.html"></a><img src="../upload/'.$img.'" alt="">
                                    <ul class="ps-product__action">
                                      <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                                      <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                      <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                      <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                                    </ul>
                                  </div>
                                  <div class="ps-product__content"><a class="ps-product__title" href="product-detail.html"><strong>'.$tenDT.'</strong></a></div>
                                    <p class="ps-product__price" style="text-align: center";>'.$gia.'VND</p>
                                  </div>
                                </div>';
                      } ?>
                  </div>
                      <div class="ps-pagination">
                        <ul class="pagination">
                          <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
              <div class="ps-sidebar">
                              <aside class="ps-widget ps-widget--sidebar ps-widget--search">
                                <form method="post" action="search-result.html">
                                  <input class="form-control" type="text" placeholder="Type here phone name...">
                                  <button type="submit"><i class="ps-icon--search"></i></button>
                                </form>
                              </aside>
                              <aside class="ps-widget ps-widget--sidebar ps-widget--category">
                                <div class="ps-widget__header">
                                  <h3 class="ps-widget__title">CATEGORY</h3>
                                </div>
                                <div class="ps-widget__content">
                                  <ul class="ps-list--circle">
                                    <?php foreach ($getNameNSX as $name) {
                                        $getName = $name['tenNSX']; 
                                        $getIdNSX = $name['idNSX'];
                                        echo'<li><a href="index.php?act=list&idnsx='.$getIdNSX.'"><span class="circle"></span>'.$getName.'</a></li>';
                                    } ?>
                                  </ul>
                                </div>
                              </aside>
                              <aside class="ps-widget ps-widget--sidebar ps-widget--filter">
                                <div class="ps-widget__header">
                                  <h3 class="ps-widget__title">Fillter Prices</h3>
                                </div>
                                <div class="ps-widget__content">
                                  <div class="ac-slider" data-default-min="300" data-default-max="2000" data-max="3450" data-step="50" data-unit="$"></div>
                                  <p class="ac-slider__meta">Price:<span class="ac-slider__value ac-slider__min"></span>-<span class="ac-slider__value ac-slider__max"></span></p><a class="ac-slider__filter ps-btn ps-btn--xs" href="#">Filter</a>
                                </div>
                              </aside>
                              <aside class="ps-widget ps-widget--sidebar ps-widget--ads">
                                <div class="ps-widget__header">
                                  <h3 class="ps-widget__title">Ads Banner</h3>
                                </div>
                                <div class="ps-widget__content"><img src="../upload/iphone-12-pro-max-xanh-duong-new.jpg" alt=""></div>
                              </aside>
                              <aside class="ps-widget ps-widget--sidebar ps-widget--tags">
                                <div class="ps-widget__header">
                                  <h3 class="ps-widget__title">TAGS</h3>
                                </div>
                                <div class="ps-widget__content">
                                      <ul class="ps-tags">
                                        <li><a href="#">Iphone</a></li>
                                        <li><a href="#">VSmart</a></li>
                                        <li><a href="#">XIAOMI</a></li>
                                        <li><a href="#">Realme</a></li>
                                        <li><a href="#">SAMSUNG</a></li>
                                        <li><a href="#">OPPO</a></li>
                                      </ul>
                                </div>
                              </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>