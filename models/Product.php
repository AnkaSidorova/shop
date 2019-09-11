<?php

class Product
{    
    const SHOW_BY_DEFAULT = 6;
    
    //получение последних товаров из бд
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT){
        
        $count = (int)$count;        
        $db = Db::getConnection();        
        $productList = array();
        
        $result = $db->query('SELECT id, name, price, img FROM product ' 
            . 'WHERE status = "active" ' . 'LIMIT '. $count);
        
        $i=0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];            
            $productList[$i]['img'] = $row['img'];
            $i++;
        }
        
        return $productList;
    }

    //получение товаров по категории
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {
            
            $page = (int)$page;
            $offset = ($page-1)*self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name, price, img FROM product "
                . "WHERE status = 'active' AND category_id = '$categoryId'"
                . "LIMIT ".self::SHOW_BY_DEFAULT
                . ' OFFSET '.$offset);

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
        $id = (int)$id;

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM product WHERE id='$id'");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
    
    public static function getTotalProductsInCategory($categoryId){
        $db = Db::getConnection();
        $result = $db->query('SELECT count(id) AS count FROM product '
        . 'WHERE status="1" AND category_id="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        return $row['count'];
    }
}


