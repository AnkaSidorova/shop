<?php

class Admin
{

    //добавление администратора
    public static function createAdmin($name, $email, $role, $password)
    {
        $db = Db::getConnection();

        $sql = 'INSERT INTO admin (email, password, name, role) '
            . 'VALUES (:email, :password, :name, :role)';


        $result = $db->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->bindParam(':name', $name);
        $result->bindParam(':role', $role);

        return $result->execute();
    }

    // редактирование пароля админа
    public static function updateAdminById($id, $password)
    {

        $db = Db::getConnection();

        $sql = 'UPDATE admin SET password = :password WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id);
        $result->bindParam(':password', $password);
        return $result->execute();
    }
    
    
    // получение списка админов
    public static function getAdminsList()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, email, password, name, role FROM admin');
        
        $adminList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $adminList[$i]['id'] = $row['id'];
            $adminList[$i]['email'] = $row['email'];
            $adminList[$i]['password'] = $row['password'];
            $adminList[$i]['name'] = $row['name'];
            $adminList[$i]['role'] = $row['role'];
            $i++;
        }
        return $adminList;
    }
    
    public static function checkUserData($email, $password)
    {        
        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM admin WHERE email = :email AND password = :password';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();
        
        $user = $result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }
    
    //Записываем идентификатор пользователя в сессию
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    
    // id пользователя
    public static function checkLogged()
    {       
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header('Location: /user/login');
    }
    
    // проверка имени
    public static function checkName($name)
    {
        return strlen($name) >= 2;
    }
    
    //проверка телефона
    public static function checkPhone($phone)
    {
        return strlen($phone) >= 10;
    }
    
    //проверка пароля
    public static function checkPassword($password)
    {
        return strlen($password) >= 2;
    }
   
    //проверка почты
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
       
    // пользователь по id
    public static function getUserById($id)
    {        
        $db = Db::getConnection();        
        
        $sql = 'SELECT * FROM admin WHERE id = :id';        
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);        
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }


    // удаление админа
    public static function deleteAdminById($id)
    {
        $db = Db::getConnection();

        $sql = 'DELETE FROM admin WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        return $result->execute();
    }
}
