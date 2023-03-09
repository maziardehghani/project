<?php

$products = $data['products'];
?>
<body>
  <div class="wrapper">

      <div class="product-area pt-95 pb-70">
          <div class="container">
              <div class="container">
                  <div class="row">
                      <?php
                      foreach ($products as $product)
                      {
                          ?>
                          <!--Product Start-->
                          <div class="col-lg-3 col-md-3 text-center">
                              <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                  <div class="ht-product-inner">
                                      <div class="ht-product-image-wrap">
                                          <a href="#" class="ht-product-image">
                                              <img src="<?= URL ?>/files/<?= $product['image'] ?>"
                                                   alt="Universal Product Style"/>
                                          </a>
                                      </div>
                                      <div class="ht-product-content">
                                          <div class="ht-product-content-inner">
                                              <div class="ht-product-categories">
                                                  <a href="#"><?= model_shop::category($product['category'])['title'] ?></a>
                                              </div>
                                              <h4 class="ht-product-title">
                                                  <a href="#"> <?= $product['title'] ?> </a>
                                              </h4>
                                              <div class="ht-product-price">
                      <span class="new">
                        <?= $product['price'] ?>
                        تومان
                      </span>
                                                  <a href="<?= URL.'/index/buy_product/'.$product['id'] ?>" class="btn btn-danger"> خرید </a>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--Product End-->
                          <?php
                      }
                      ?>
                  </div>
              </div>
          </div>



