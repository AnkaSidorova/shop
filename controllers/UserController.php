<?php
/**
 * Контроллер UserController
 */
class UserController
{
      
    //вход в админпанель
    public function actionLogin()
    {
        $email = '';
        $password = '';

        // Обработка формы
        if (isset($_POST['submit'])) {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            // Валидация полей            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            
            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);
            if ($userId === false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                // Если данные правильные, запоминаем пользователя (сессия)
                User::auth($userId);
                // Перенаправляем пользователя в закрытую часть - кабинет 
                header('Location: /admin/');
            } 
        }
        
        require_once ROOT . '/views/user/login.php';
        return true;
    }
  
    //удаление сессии
    public function actionLogout()
    {
        // Стартуем сессию
        session_start();

        // Удаляем информацию о пользователе из сессии
        unset($_SESSION['user']);

        // Перенаправляем пользователя на главную страницу
        header('Location: /');
    }
}
