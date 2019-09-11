<?php

 class EntryController{
     public function actionIndex()
     {
         require_once ROOT . '/views/panel/admin.php';
         return true;
     }
 }
