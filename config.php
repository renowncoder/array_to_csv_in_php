<?php

// Class autoloader function
spl_autoload_register('myAutoLoader');
  function myAutoLoader($className)
  {
      /**
       *  Change this line, if you move all.
       *  classes to different folder.
       */
      $path = 'classes/';

      $extension = '.php';
      $fullPath = $path.$className.$extension;

      if (!file_exists($fullPath)) {
          return false;
      }
      include_once $fullPath;
  }
