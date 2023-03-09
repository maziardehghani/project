<?php
class model_adminorder extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function getOrders()
    {
        $sql = 'select * from tbl_order order by id desc';
        $result = $this->doSelect($sql);
        return $result;

    }

    function orderInfo($id)
    {
        $sql = 'select tbl_order.* , tbl_status.title_status
        from tbl_order
        left join tbl_status
        on tbl_order.status = tbl_status.id
         where tbl_order.id =?';
        $result = $this->doSelect($sql, [$id], false);
        $basket = unserialize($result['basket']);
        foreach ($basket as $key2 => $col) {
            $color = $col['basketcolor'];
            $sql = 'select tbl_color.title from tbl_color where id = ?';
            $colorName = $this->doSelect($sql, [$color]);
            $basket[$key2]['colorName'] = $colorName;
        }
        return [$result, $basket];

    }

    function deleteOrder($IDs)
    {
        $X = join(',' , $IDs);
        $sql = 'delete from tbl_order where id in ('.$X.')';
        $this->doQuery($sql);
    }
}