<?php
class model_checkout extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getbasketproduct()
    {
        $cookie = self::getbasketcookie();
        $sql = 'select tbl_basket.tedad,tbl_basket.color as basketcolor,
                tbl_basket.id as basketrow ,
                tbl_product.* 
                from tbl_basket 
                join tbl_product on tbl_basket.productID = tbl_product.id
                 where cookie =?';
        $result = $this->doSelect($sql ,[$cookie]);
        foreach ($result as $key=>$row)
        {
            $discount = $row['discount'];
            $price =  $row['price'];
            $discountPrice = $this->calc_discount($price , $discount);
            $discountPrice=$discountPrice[1];
            $result[$key]['Endprice'] = $discountPrice;
        }
        $pricetotal = 0;
        foreach ($result as $row)
        {
            $tedad = $row['tedad'];
            $price =  $row['Endprice'];
            $pricetotal = $price*$tedad+$pricetotal;
        }

        return [$result , $pricetotal];
    }
    function checkcode($code)
    {
        $sql = 'select * from tbl_code where code =? and used = 0';
        $result = $this->doSelect($sql , [$code] );
        if (sizeof($result)>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function docopen($code)
    {
        $priceTotal = $this->getbasketproduct();
        $priceTotal = $priceTotal[1];
        $sql = 'select * from tbl_code where code =? and used = 0';
        $result = $this->doSelect($sql , [$code] , false );
        $darsad = $result['darsad'];
        $calc_discount = $this->calc_discount($priceTotal , $darsad);
        $result = $calc_discount[1];

        return $result;

    }
    function saveOrder($data)
    {
        $email = $data['email'];
        $name = $data['name'];
        $family = $data['family'];
        $address = $data['address'];
        $city = $data['city'];
        $codePosti = $data['codePost'];
        $phone = $data['phone'];
        $copen = $data['copen'];
        $basket = $this->getbasketproduct();
        $basketInfo = $basket[0];
        $priceTotal= $basket[1];
        include_once 'public/plugins/jdf.php';
        $date = jdate("Y/n/j" , '' , '' , 'asia/tehran' , 'en');

        $basketInfo = serialize($basketInfo);

        $amount = 0;
        if ($this->checkcode($copen)==true)
        {
            $amount = $this->docopen($copen);
            $amount = $amount+transfer;
        }else
        {
            $amount = $priceTotal;
        }

        $userID = self::get_session('userID');



        $sql = 'insert into tbl_order (email,family,address,shahr,codeposti,telephone,basket,amount,userID,dateTime) values 
                (?,?,?,?,?,?,?,?,?,?)';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1 ,$email );
        $stmt->bindValue(2 ,$family);
        $stmt->bindValue(3 ,$address);
        $stmt->bindValue(4,$city);
        $stmt->bindValue(5,$codePosti);
        $stmt->bindValue(6,$phone);
        $stmt->bindValue(7,$basketInfo);
        $stmt->bindValue(8,$amount);
        $stmt->bindValue(9,$userID);
        $stmt->bindValue(10,$date);
        $stmt->execute();



    }

}