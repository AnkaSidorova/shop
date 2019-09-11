<?php

class SiteController
{
    //главная страница сайта
    public function actionIndex()
    {
        //для вывода категорий товаров
        $categories = Category::getCategoriesList();

        //для вывода товаров 5 штук последних из бд
        $latestProducts = Product::getLatestProducts(6);

        require_once ROOT . '/views/site/index.php';

        return true;
    }
    
}


//public function actionContact()
//{
//
//    $mail = 'anya_sidorova_2015@bk.ru';
//    $subject = 'Тема письма';
//    $message = 'Содержание письма';
//    $result = mail($mail, $subject, $message);
//
//    var_dump($result);
//
//    die();
//}
