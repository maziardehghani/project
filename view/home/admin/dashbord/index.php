<?php


$orders = $data['orders'];

?>
<div class="wrapper">

    <!-- my account wrapper start -->
    <div class="my-account-wrapper pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row text-right" style="direction: rtl;">
                            <?php require('view/home/admin/layout.php') ?>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="categories" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3> سفارشات </h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">نام خریدار</th>
                                                            <th scope="col">قیمت</th>
                                                            <th scope="col">وضعیت پرداخت</th>
                                                            <th scope="col">تاریخ سفارش</th>
                                                            <th scope="col">عملیات</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>




                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!-- my account wrapper end -->


</div>

