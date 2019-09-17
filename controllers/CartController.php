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

    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
       
        header('Location: /cart');
    }
    
    public function actionUpdate($id){
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
