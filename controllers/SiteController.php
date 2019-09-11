<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController
{
    //главная страница сайта
    public function actionIndex()
    {
        //для вывода категорий товаров
        $categories = Category::getCategoriesList();
        
        //для вывода товаров 5 штук последних из бд
        $latestProducts = Product::getLatestProducts(4);

        require_once ROOT . '/views/site/index.php';

        return true;
    }
}
