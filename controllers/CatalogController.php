<?php

class CatalogController
{
    //каталог - основная страница с товарами
    public function actionIndex()
    {
        //для вывода категорий товаров
        $categories = Category::getCategoriesList();

        //для вывода товаров 9 штук последних из бд
        $latestProducts = Product::getLatestProducts(9);

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
        
        //создаем обьект Pagination
        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, '');

        require_once ROOT . '/views/catalog/category.php';
        return true;
    }

}
