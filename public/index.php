<?php

use Planck\Core\PlanckApp;

// keep the global scope clean by wrapping everything in an immediately executing function
call_user_func(function () {
  require '../vendor/autoload.php';

  // handy utility functions
  // TODO: Fix this ...
  require '../vendor/codeeverything/planck-framework/src/Core/Utils/Utils.php';
  
  // config
  $config = [];
  
  include_once '../config/services.php';
  include_once '../config/app.php';  // the container is used to store app config parameters, so init first
  include_once '../config/listeners.php';
  include_once '../config/database.php';
  include_once '../config/routes.php';
  
  error_reporting($config['app.errorlevel']);
  ini_set('display_errors', $config['app.debug']);
  
  PlanckApp::run($router, $container, $config);
});
