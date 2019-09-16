<?php

class AdminProductController extends AdminBase
{
    //просмотр товаров
    public function actionIndex(){
        self::checkAdmin();
        $productsList = Product::getProductsList();
        require_once ROOT . '/views/admin_product/index.php';
        return true;
    }

    //удаление товара
    public function actionDelete($id)
    {        
        self::checkAdmin();        
        
        if (isset($_POST['submit'])) {
            
            Product::deleteProductById($id);
            
            header('Location: /admin/product');
        }
       
        require_once ROOT . '/views/admin_product/delete.php';
        return true;
    }
}
