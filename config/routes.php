<?php

return array(

    'cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
    'cart/delete/([0-9]+)' => 'cart/delete', // actionDelete в CartController 
        
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
    'catalog'=>'catalog/index', //actionIndex CatalogController  

    'category/([0-9]+)/([0+9]+)'=>'catalog/category/$1/$2', // actionCategory в CatalogController    
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController  

    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
    'cart' => 'cart/index', // actionIndex в CartController
       
    '' => 'site/index', // actionIndex в SiteController
);
