<?php
require('view/admin/layout.php');
?>
<style>
    .btn_green2{
        background: #36be2b none repeat scroll 0 0;
        border-radius: 4px;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 9pt;
        height: 27px;
        line-height: 27px;
        text-align: center;
        width: 42px;
    }
</style>
<style>
    .row {
        width: 100%;
        float: right;
        margin-top: 5px;
    }

    .span_title {
        display: inline-block;
        width: 150px;
        font-size: 11pt;
    }

    input {
        width: 200px;
        height: 24px;
        border: 1px solid #eee;
    }

    select {
        height: 32px;
        line-height: 30px;
        padding: 2px;

    }

    option {
        padding: 2px;
        font-size: 11pt;
    }

    textarea {
        width: 500px;
        border: 1px solid #ccc;
        height: 250px;
        vertical-align: top;
    }

</style>
<?php
$options = model::get_option();

?>
<div class="left" >

    <p class="title">

        تنظیمات سایت



    <form style="margin-right: 50px" action="<?= baseURL ?>adminsetting/index" method="post" enctype="multipart/form-data">

        <div class="row">

        <span class="span_title">
محدوده بیشترین بازدید:
        </span>
            <input type="text" name="mostViewLimit" value="<?= $options['mostViewLimit'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
شماره های تماس:
        </span>
            <input type="text" name="tel" value="<?= $options['tel'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
ایمیل ارتباط با ما:
        </span>
            <input type="text" name="email" value="<?= $options['email'] ?>">

        </div>
        <div class="row">

        <span class="span_title">
ادرس:
        </span>
            <input type="text" name="address" value="<?= $options['address'] ?>">

        </div>


        <div class="row">

        <span class="span_title">
مهلت پرداخت(ساعت):
        </span>
            <input type="text" name="mohlatPay" value="<?= $options['mohlatPay'] ?>">

        </div>

        <div class="row">
        <span class="span_title">
         هزینه ارسال:
        </span>
            <input type="text" name="transfer" value="<?= $options['transfer'] ?>">

        </div>

        <div class="row">

        <span class="span_title">
روت سایت:
        </span>
            <input type="text" name="URL" value="<?= $options['URL'] ?>">

        </div>
        <div class="row">

        <span class="span_title">
روت پایه سایت:
        </span>
            <input type="text" name="baseURL" value="<?= $options['baseURL'] ?>">

        </div>
        <div class="row">

        <span class="span_title">
کد درگاه زرین پال:
        </span>
            <input type="text" name="zarinPall" value="<?= $options['zarinPall'] ?>">

        </div>

        <a class="btn_green" onclick="submitForm();" style="cursor: pointer;">
            اجرای عملیات
        </a>

    </form>


</div>
<script>
    function submitForm()
    {
        $('form').submit();
    }

</script>

</div>
