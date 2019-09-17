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

    //добавление товара
    public function actionCreate()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors === false) {
                $id = Product::createProduct($options);                    
                header('Location: /admin/product');
            }
        }
        require_once ROOT . '/views/admin_product/create.php';
        return true;
    }

    //редактирование товара
    public function actionUpdate($id)
    {        
        self::checkAdmin();        
        $product = Product::getProductById($id);
        
        if (isset($_POST['submit'])) {
            
            $options['name'] = $_POST['name'];
            $options['category_id'] = $_POST['category_id'];
            $options['code'] = $_POST['code'];
            $options['description'] = $_POST['description'];
            $options['price'] = $_POST['price'];
            $options['status'] = $_POST['status'];
            $options['recommended'] = $_POST['recommended'];
            
            Product::updateProductById($id, $options);
            
            header('Location: /admin/product');
        }
        
        require_once ROOT . '/views/admin_product/update.php';
        return true;
    }

    //удаление товара
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            Product::deleteProductById($id);

            unset($_SESSION['products'][$id]);

            header('Location: /admin/product');
        }

        require_once ROOT . '/views/admin_product/delete.php';
        return true;
    }
}
