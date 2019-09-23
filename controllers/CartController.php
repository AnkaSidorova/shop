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

    //оформление заказа
    public function actionCheckout()
    {
        $categories = Category::getCategoriesList();

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {

            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
        }

        $productsInCart = Cart::getProducts();

        if ($productsInCart === false) {
            header('Location: /');
        }


        $productsIds = array_keys($productsInCart);
        $products = Product::getProductsByIds($productsIds);

        $result = false;

        if (isset($_POST['submit'])) {
            $name_user = $_POST['name_user'];
            $tel_user = $_POST['tel_user'];
            $email_user = $_POST['email_user'];
            $address_user = $_POST['address_user'];
            $comment_user = $_POST['comment_user'];
            $user_products = json_encode($products);
            $date_order = date('Y-m-d');
            $amount = $totalPrice;


            $errors = false;

            if (!Admin::checkName($name_user)) {
                $errors[] = 'Неправильное имя';
            }
            if (!Admin::checkPhone($tel_user)) {
                $errors[] = 'Неправильный телефон';
            }


            if ($errors === false) {

                $result = Order::save($name_user, $tel_user, $email_user, $address_user, $comment_user, $user_products, $amount, $date_order);

                if ($result) {
                    
                    Cart::clear();
                    header('Location: /cart/');
                }
            }
        }

        require_once ROOT . '/views/cart/checkout.php';

        return true;
    }
    
    public function actionSend(){
        require_once ROOT . '/mailer/send.php';

        return true;
    }


    //удаление товара
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header('Location: /cart');
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

}
