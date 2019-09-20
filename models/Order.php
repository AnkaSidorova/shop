<?php

class Order
{
    //добавление заказа
    public static function save($name_user, $tel_user, $email_user, $address_user, $comment_user, $user_products, $amount, $date_order)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO oder_user (name_user, tel_user, email_user, address_user, comment_user, products, amount, date_order) '
            . 'VALUES (:name_user, :tel_user, :email_user, :address_user, :comment_user, :user_products, :amount, :date_order)';


        $result = $db->prepare($sql);
        $result->bindParam(':name_user', $name_user);
        $result->bindParam(':tel_user', $tel_user);
        $result->bindParam(':email_user', $email_user);
        $result->bindParam(':address_user', $address_user);
        $result->bindParam(':comment_user', $comment_user);
        $result->bindParam(':user_products', $user_products);
        $result->bindParam(':amount', $amount);
        $result->bindParam(':date_order', $date_order);

        return $result->execute();
    }

    // получение списка товаров
    public static function getOrdersList()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name_user, tel_user, email_user, address_user, comment_user, products, date_order  FROM oder_user ORDER BY id ASC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['name_user'] = $row['name_user'];
            $ordersList[$i]['tel_user'] = $row['tel_user'];
            $ordersList[$i]['email_user'] = $row['email_user'];
            $ordersList[$i]['address_user'] = $row['address_user'];
            $ordersList[$i]['comment_user'] = $row['comment_user'];
            $ordersList[$i]['products'] = $row['products'];
            $ordersList[$i]['date_order'] = $row['date_order'];
            $i++;
        }
        return $ordersList;
    }

    //получение заказа по id
    public static function getOrderById($id)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM oder_user WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }
}
