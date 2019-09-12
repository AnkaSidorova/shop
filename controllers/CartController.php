<?php

class CartController
{
    //добавление товара в корзину и редирект пользователя    
    public function actionAdd($id)
    {
        Cart::addProduct($id);
        
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    //получение данных из корзины, получение id товара, получение общей стоимости   
    public function actionIndex()
    {
        $categories = Category::getCategoriesList();      

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            
            $productsIds = array_keys($productsInCart);            
            $products = Product::getProductsByIds($productsIds);
            
            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once ROOT . '/views/cart/index.php';
        return true;
    }
    
    //оформление заказа через форму
    public function actionCheckout()
    {       
        $categories = Category::getCategoriesList();

        // Статус успешного оформления заказа
        $result = false;

        // Форма отправлена?
        if (isset($_POST['send'])) {
            // Форма отправлена? - Да
            // Считываем данные формы
            $name_user = $_POST['name_user'];
            $tel_user = $_POST['tel_user'];
            $email_user = $_POST['email_user'];
            $address_user = $_POST['address_user'];
            $komment_user = $_POST['komment_user'];
            $date_order = date('d.m.y');
            $dfs = $_POST[''];
            

            // Валидация полей
            $errors = false;
            if (!User::checkName($name_user))
                $errors[] = 'Неправильное имя';
            if (!User::checkPhone($tel_user))
                $errors[] = 'Неправильный телефон';
            if (!User::checkEmail($email_user))
                $errors[] = 'Неправильная почта';
            
            
            // Форма заполнена корректно?
            if ($errors == false) {
                // Форма заполнена корректно? - Да
                // Сохраняем заказ в базе данных
                // Собираем информацию о заказе
                $productsInCart = Cart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }

                // Сохраняем заказ в БД
                $result = Order::save(name_user, tel_user, email_user,address_user ,komment_user, $userId, $productsInCart);

                if ($result) {
                    // Оповещаем администратора о новом заказе                
                    $adminEmail = 'php.start@mail.ru';
                    $message = 'http://digital-mafia.net/admin/orders';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);

                    // Очищаем корзину
                    Cart::clear();
                }
            } else {
                // Форма заполнена корректно? - Нет
                // Итоги: общая стоимость, количество товаров
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();
            }
        } else {
            // Форма отправлена? - Нет
            // Получием данные из корзины      
            $productsInCart = Cart::getProducts();

            // В корзине есть товары?
            if ($productsInCart === false) {
                // В корзине есть товары? - Нет
                // Отправляем пользователя на главную искать товары
                header('Location: /');
            } else {
                // В корзине есть товары? - Да
                // Итоги: общая стоимость, количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();


                $userName = false;
                $userPhone = false;
                $userComment = false;

                // Пользователь авторизирован?
                if (User::isGuest()) {
                    // Нет
                    // Значения для формы пустые
                } else {
                    // Да, авторизирован                    
                    // Получаем информацию о пользователе из БД по id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    // Подставляем в форму
                    $userName = $user['name'];
                }
            }
        }

        require_once ROOT . '/views/cart/checkout.php';

        return true;
    }

}
