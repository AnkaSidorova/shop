<?php

return array(    
    'entry'=>'entry/index', //actionIndex EntryController  
    
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    
    'catalog'=>'catalog/index', //actionIndex CatalogController  

    'category/([0-9]+)/([0+9]+)'=>'catalog/category/$1/$2', // actionCategory в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    '' => 'site/index', // actionIndex в SiteController
);

