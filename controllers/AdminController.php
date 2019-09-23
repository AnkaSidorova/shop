<?php

class AdminController extends AdminBase
{
    //проверка на права админа
    public function actionIndex()
    {
        self::checkAdmin();
        $productsList = Product::getProductsList();
        require_once ROOT . '/views/admin/index.php';

        return true;
    }

    //получение списка админов
    public function actionRedact()
    {
        self::checkAdmin();
        $adminsList = Admin::getAdminsList();
        require_once ROOT . '/views/admin/main.php';

        return true;
    }

    //редактирование администратора(пароль)
    public function actionUpdate($id)
    {
        self::checkAdmin();
        $admin = Admin::getUserById($id);

        if (isset($_POST['submit'])) {

            $password = $_POST['password'];
            $hash = md5($password);

            Admin::updateAdminById($id, $hash);

            header('Location: /admin/redact');
        }
        require_once ROOT . '/views/admin/update.php';

        return true;
    }


    //добавление админа
    public function actionCreate()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $password = $_POST['password'];
            
            $hash = md5($password);
            
            Admin::createAdmin($name, $email, $role, $hash);
            header('Location: /admin/redact');
        }
        require_once ROOT . '/views/admin/create.php';

        return true;
    }

    //удаление админа
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {

            Admin::deleteAdminById($id);

            unset($_SESSION['products'][$id]);

            header('Location: /admin/redact');
        }

        require_once ROOT . '/views/admin/delete.php';

        return true;
    }

    //выход с админ-панели
    public function actionLogout()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: /');
    }
}
