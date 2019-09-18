<?php

class Order
{

    public static function save($name_user, $tel_user, $email_user, $address_user, $comment_user, $user_products, $date_order)
    {        
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO oder_user (name_user, tel_user, email_user, address_user, comment_user, products, date_order) '
            . 'VALUES (:name_user, :tel_user, :email_user, :address_user, :comment_user, :user_products, :date_order)';
        
       
        $result = $db->prepare($sql);
        $result->bindParam(':name_user', $name_user);
        $result->bindParam(':tel_user', $tel_user);
        $result->bindParam(':email_user', $email_user);
        $result->bindParam(':address_user', $address_user);
        $result->bindParam(':comment_user', $comment_user);
        $result->bindParam(':user_products', $user_products);
        $result->bindParam(':date_order', $date_order);
        
        return $result->execute();
    }
}
