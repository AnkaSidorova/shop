<?php

class AdminProductController extends AdminBase
{
    //просмотр товаров
    public function actionIndex()
    {
        self::checkAdmin();
        $productsList = Product::getProductsList();
        require_once ROOT . '/views/admin_product/index.php';

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
            
            
            if (Product::updateProductById($id, $options) && is_uploaded_file($_FILES['img']['tmp_name'])) {

                move_uploaded_file($_FILES['img']['tmp_name'], ROOT . "/upload/images/products/$id.jpg");
            }

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

    //добавление товара
    public function actionCreate()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $category_id = $_POST['category_id'];
            $code = $_POST['code'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $recommended = $_POST['recommended'];

            $id = Product::createProduct($name, $category_id, $code, $description, $price, $status, $recommended);
            
            print_r($id);

            if ($id) {
                
                if (is_uploaded_file($_FILES['img']['tmp_name'])) {
                    
                    move_uploaded_file($_FILES['img']['tmp_name'], ROOT . "/upload/images/products/$id.jpg");
                }
            }
            header('Location: /admin/product');
        }

        require_once ROOT . '/views/admin_product/create.php';

        return true;
    }
}
