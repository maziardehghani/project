
<body>
    <div class="wrapper">

        <div class="login-register-area pt-100 pb-100" style="direction: rtl;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="" href="<?= URL.'/login/index' ?>">
                                    <h4> ورود </h4>
                                </a>
                                <a data-toggle="" href="<?=  URL.'/register/index' ?>">
                                    <h4> عضویت </h4>
                                </a>
                            </div>
                            <div class="tab-content">

                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="<?=  URL.'/login/login' ?>" method="post">
                                                <input name="email" type="email"  placeholder="ایمیل" required>
                                                <input name="password" type="password"  placeholder="رمز عبور" required>
                                                <div class="button-box">

                                                    <button type="submit">ورود</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
