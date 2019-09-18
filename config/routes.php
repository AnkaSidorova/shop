<?php

return array(
       
    // АДМИН-ПАНЕЛЬ
    
    // товары
    'admin/product/create' => 'adminProduct/create', //actionCreate AdminProductController
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1', //actionUpdate AdminProductController
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1', //actionDelete AdminProductController
    'admin/product' => 'adminProduct/index', //actionIndex AdminProductController
    
    'admin'=>'admin/index', //actionIndex AdminController      
    
    // заказы
    'admin/order' => 'adminOrder/index', //actionIndex AdminOrderController
    
    //управление админ-панелью
    'admin/admin_panel'=>'adminAdmin_panel/index', //actionIndex AdminAdmin_panelController      

    // пользователь
    'user/login' => 'user/login', // actionLogin в UserController
    'user/logout' => 'user/logout', // actionLogout в UserController 

    // карточка товара  
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController       
    
    // корзина
    'cart/checkout' => 'cart/checkout', // actionCheckout в CartController (оформление заказа)
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController (удаление товара из корзины)
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController (добавление товара в корзину)
    'cart' => 'cart/index', // actionIndex в CartController        

    // категории
    'category/([0-9]+)/([0+9]+)'=>'catalog/category/$1/$2', // actionCategory в CatalogController    
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController  

    // каталог
    'catalog'=>'catalog/index', //actionIndex CatalogController  
    
    // главная страница
    '' => 'site/index', // actionIndex в SiteController
);
