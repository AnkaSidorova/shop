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
        
        if (isset($_POST['submit'])) {
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hash = hash('md5', $password);
            
            
            $errors = false;            
              
            if (!Admin::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!Admin::checkPassword($hash)) {
                $errors[] = 'Неправильный пароль';
            }
            
            $userId = Admin::checkUserData($email, $hash);
            if ($userId === false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                Admin::auth($userId);
                header('Location: /admin/');
            } 
        }
        
        require_once ROOT . '/views/user/login.php';
        return true;
    }
  
    //удаление сессии
    public function actionLogout()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: /');
    }
}
