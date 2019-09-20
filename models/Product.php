<?php

class Product
{
    const SHOW_BY_DEFAULT = 6;

    //получение последних товаров из бд
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {

        $db = Db::getConnection();

        $sql = 'SELECT id, name, price FROM product '
            . 'WHERE status = "active" ORDER BY id DESC '
            . 'LIMIT :count';


        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        $i = 0;
        $productsList = [];
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productsList;
    }

    //получение товаров по категории
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = (int)$page;
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = [];
            $result = $db->query('SELECT id, name, price, img FROM product '
                . "WHERE status = 'active' AND category_id = '$categoryId'"
                . 'LIMIT ' . self::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset);

            $i = 0;
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['img'] = $row['img'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }

            return $products;
        }
    }

    //получение товаров по id товара(карточка товара)
    public static function getProductById($id)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM product WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    //получение числа товаров в определенной категории
    public static function getTotalProductsInCategory($categoryId)
    {

        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . 'WHERE status="active" AND category_id="' . $categoryId . '"');

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    //получение продуктов с id 
    public static function getProductsByIds($idsArray)
    {
        $db = Db::getConnection();

        $products = [];

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE status='active' AND id IN ($idsString)";

        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }

        return $products;
    }


    // похожие товары    
    public static function getRecommendedProducts($id)
    {        
        $db = Db::getConnection();

        $category = "SELECT category_id FROM product WHERE id = '$id'";
        
        $result = $db->query("SELECT id, name, price, img FROM product WHERE recommended = '1' AND category_id = '$category' LIMIT 3");
        
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['img'] = $row['img'];
            $i++;
        }
        return $productsList;
    }
    

    // список существующих товаров из бд
    public static function getProductsList()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, code, price FROM product ORDER BY id ASC');
        $productsList = [];
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productsList;
    }

    //добавление товара
    public static function createProduct($name, $category_id, $code, $description, $price, $status, $recommended)
    {
        $db = Db::getConnection();


        $sql = 'INSERT INTO product (name, category_id, code, description, price, status, recommended) '
            . 'VALUES (:name, :category_id, :code, :description, :price, :status, :recommended)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name);
        $result->bindParam(':category_id', $category_id);
        $result->bindParam(':code', $code);
        $result->bindParam(':description', $description);
        $result->bindParam(':price', $price);
        $result->bindParam(':status', $status);
        $result->bindParam(':recommended', $recommended);

        if ($result->execute()) {            
            return $db->lastInsertId();
        }
        return 0;
    }


    // редактирование товара
    public static function updateProductById($id, $options)
    {

        $db = Db::getConnection();

        $sql = 'UPDATE product
            SET 
                name = :name, 
                category_id = :category_id, 
                code = :code, 
                description = :description,                 
                price = :price, 
                status = :status,
                recommended = :recommended               
            WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':recommended', $options['recommended'], PDO::PARAM_INT);

        return $result->execute();
    }

    // удаление товара
    public static function deleteProductById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM product WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }

    // работа с изображениями
    public static function getImage($id)
    {
        $noImage = 'no-image.jpg';
        
        $path = '/upload/images/products/';

        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists(ROOT.$pathToProductImage)) {
            
            return $pathToProductImage;
        }
        
        return $path . $noImage;
    }
}
