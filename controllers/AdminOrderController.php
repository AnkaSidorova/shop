<?php

class AdminOrderController extends AdminBase
{
    //просмотр товаров
    public function actionIndex()
    {
        self::checkAdmin();
        $orderList = Order::getOrdersList();
        require_once ROOT . '/views/admin_order/index.php';

        return true;
    }

    // подробнее о товаре
    public function actionMore($id)
    {
        self::checkAdmin();
        $order= Order::getProductById($id);       

        require_once ROOT . '/views/admin_order/more.php';
        return true;
    }

}
