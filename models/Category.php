<?php

class Category
{
    
    public static function getCategoriesList(){

        $db = Db::getConnection();
        $categoryList = array();

        $result = $db->query('SELECT id, name FROM category');

        $i = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }
}
