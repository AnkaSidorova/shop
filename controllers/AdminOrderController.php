<?php

class AdminOrderController extends AdminBase
{
    //просмотр заказа
    public function actionIndex()
    {
        self::checkAdmin();
        $orderList = Order::getOrdersList();
        require_once ROOT . '/views/admin_order/index.php';

        return true;
    }

    // подробнее о заказе
    public function actionMore($id)
    {
        self::checkAdmin();
        $order = Order::getOrderById($id);
        require_once ROOT . '/views/admin_order/more.php';

        return true;
    }
}
