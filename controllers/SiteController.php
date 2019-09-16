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
        
        //для вывода рекомпендованных товаров 
        $sliderProducts = Product::getRecommendedProducts();

        require_once ROOT . '/views/site/index.php';

        return true;
    }
    
}
