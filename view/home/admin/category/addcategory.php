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
                                        <h3> دسته بندی ها </h3>
                                        <div class="account-details-form">
                                            <form action="<?= URL.'/admincategory/addcategory' ?>" method="post">
                                                <div class="row">

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">
                                                                عنوان
                                                            </label>
                                                            <input name="title" type="text"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">
                                                                زیردسته
                                                            </label>
                                                            <select name="parent">
                                                                <option value="1">مردانه</option>
                                                                <option value="2">زنانه</option>
                                                                <option value="3">بچگانه</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger"> ذخیره</button>
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

