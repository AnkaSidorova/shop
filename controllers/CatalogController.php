<?php

class CatalogController
{
    //каталог - основная страница с товарами
    public function actionIndex()
    {
        //для вывода категорий товаров
        $categories = Category::getCategoriesList();

        //для вывода товаров 8 штук последних из бд
        $latestProducts = Product::getLatestProducts(8);

        require_once ROOT . '/views/catalog/index.php';

        return true;
    }
    
    public function actionCategory($categoryId, $page = 1)
    {
        //для вывода категорий товаров
        $categories = Category::getCategoriesList();

        //для вывода товаров по данной категории
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);
        
        $total = Product::getTotalProductsInCategory($categoryId);        

        require_once ROOT . '/views/catalog/category.php';
        return true;
    }

}
