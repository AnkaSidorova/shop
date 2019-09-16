<?php

class AdminController extends AdminBase
{
    //проверка на права админа
    public function actionIndex()
    {
        self::checkAdmin();
        $productsList = Product::getProductsList();
        require_once ROOT . '/views/admin/index.php';
        return true;
    }

    //выход с админ-панели
    public function actionLogout()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: /');
    }
}
