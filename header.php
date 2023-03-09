<?php
$option_header = model::get_option();

$categories = model::Categories();

$shopping_cart = model::getbasketsession();


?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>digi style</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= URL ?>/public/home/img/favicon.png" />

    <!-- CSS
      ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= URL ?>/public/home/css/bootstrap.min.css" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?= URL ?>/public/home/css/icons.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?= URL ?>/public/home/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?= URL ?>/public/home/css/style.css" />
    <!-- Modernizer JS -->
    <!-- <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script> -->
</head>
<body>
<div class="wrapper">

    <header class="header-area sticky-bar">
        <div class="main-header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo pt-40">
                            <a href="<?= 'index' ?>">
                                <h3 class="font-weight-bold">Digi Style.ir</h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-7">
                        <div class="main-menu text-center">
                            <nav>
                                <ul>
                                    <li class="angle-shape">
                                        <a href="<?= URL.'/aboutUs' ?>"> تماس با ما </a>
                                    </li>

                                    <li><a href="<?= URL .'/contactUs' ?>"> درباره ما </a></li>

                                    <li class="angle-shape">
                                        <a href="#"> فروشگاه </a>

                                        <ul class="mega-menu">
                                            <li>
                                                <a class="menu-title" href="#">مردانه</a>

                                                <ul>
                                                    <ul>
                                                        <?php
                                                        foreach ($categories as $category)
                                                        {
                                                            ?>
                                                            <li>
                                                                <a href="<?= URL."/shop/index/".$category['id']?>"><?php
                                                                    if ($category['parent'] == 1)
                                                                    {
                                                                        echo $category['title'];
                                                                    }else{ continue; }  ?>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </ul>
                                            </li>

                                            <li>
                                                <a class="menu-title" href="#">زنانه</a>
                                                <ul>
                                                    <?php
                                                    foreach ($categories as $category)
                                                    {
                                                    ?>
                                                    <li>
                                                        <a href="<?= URL."/shop/index/".$category['id']?>"><?php
                                                            if ($category['parent'] == 2)
                                                            {
                                                                echo $category['title'];
                                                            }else{ continue; }  ?>
                                                        </a>
                                                    </li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </li>

                                            <li>
                                                <a class="menu-title" href="#">بچه گانه</a>
                                                <ul>
                                                    <ul>
                                                        <?php
                                                        foreach ($categories as $category)
                                                        {
                                                            ?>
                                                            <li>
                                                                <a href="<?= URL."/shop/index/".$category['id']?>"><?php
                                                                    if ($category['parent'] == 3)
                                                                    {
                                                                        echo $category['title'];
                                                                    }else{ continue; }  ?>
                                                                </a>
                                                            </li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="angle-shape">
                                        <a href="<?= URL.'/index' ?>"> صفحه اصلی </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3">
                        <div class="header-right-wrap pt-40">
                            <div class="cart-wrap">
                                <button class="icon-cart-active">
                    <span class="icon-cart">
                      <i class="sli sli-bag"></i>
                      <span class="count-style"><?= count($shopping_cart) ?></span>
                    </span>

                                </button>
                                <div class="shopping-cart-content">
                                    <div class="shopping-cart-top">
                                        <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                        <h4>سبد خرید</h4>
                                    </div>
                                    <ul>
                                        <?php
                                        $total_price=0;
                                        foreach ($shopping_cart as $key => $item)
                                        {
                                            $total_price+=$item['price'];
                                        ?>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#"> <?= $item['title'] ?> </a></h4>
                                                    <span><?= $item['price'] ?></span>
                                                </div>

                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt="" src="<?= 'files/'.$item['image'] ?>" /></a>
                                                    <div class="item-close">
                                                        <a href="<?= URL.'/index/deletebasket/'.$key ?>"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <div class="shopping-cart-bottom">
                                        <div class="shopping-cart-total d-flex justify-content-between align-items-center"
                                             style="direction: rtl;">
                                            <h4>
                                                جمع کل :
                                            </h4>
                                            <span class="shop-total">
                          <?= $total_price ?> تومان
                        </span>
                                        </div>
                                        <div class="shopping-cart-btn btn-hover text-center">
                                            <a class="btn btn-google" href="checkout.html">
                                                پرداخت
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="setting-wrap">
                                <button class="setting-active">
                                    <i class="sli sli-settings"></i>
                                </button>
                                <div class="setting-content">
                                    <ul class="text-right">
                                        <li><a href="<?= URL.'/login' ?>">ورود</a></li>
                                        <li>
                                            <a href="<?= URL.'/register' ?>">ایجاد حساب</a>
                                        </li>
                                        <li><a href="<?= URL.'/admindashbord'?>">پروفایل</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

