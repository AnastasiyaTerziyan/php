<?php

/**
 * Main functions
 */

/**
 * Prcess request
 */
function process_request() {

  // PARSE REQUEST
  // Get request string as pattern: /controller/action/param1/param2
  $requesturiInfo = parse_url($_SERVER['REQUEST_URI']);
  $requestPaths = explode('/', $requesturiInfo['path']);
  // Get controller name
  if (empty($requestPaths[1])) {
    $controllerName = MVC_DEFAULT_CONTROLLER;
  } else {
    $controllerName = $requestPaths[1];
  }
  // Get action name
  if (empty($requestPaths[2])) {
    $actionName = MVC_DEFAULT_ACTION;
  } else {
    $actionName = $requestPaths[2];
  }
  // Get Path params
  if (count($requestPaths) >= 3) {
    $pathParams = array_slice($requestPaths, 3);
  } else {
    $pathParams = [];
  }

  // GET AND CALL ACTION

//  $controllerName = "b\\" . $controllerName;
  $controllerPath = SITE_PATH . '/controllers/' . $controllerName . '.controller.php';
  $controllerFunctionName = 'action_' . $controllerName . '_' . $actionName;
  //создали объект класса 
  $controller = new $controllerName();
  if (!file_exists($controllerPath)) {
    exit('No such controller "' . $controllerName . '".'); //ToDo: make proper low-level error handling
  }
  //существует ли метод данного класса
  if (!method_exists($controller, $controllerFunctionName)) {
    exit('No such action "' . $actionName . '".'); //ToDo: make proper low-level error handling
  }
  //чтобы вызывался метод в конкретном контроллере
  $responseData = call_user_func_array(array($controller, $controllerFunctionName), $pathParams);
  if( !isset($responseData['view']) || !isset($responseData['data']) ){
    if(!isset($responseData['redirect'])){
      exit('Action "' . $actionName . '" doesn\'t return proper response!.'); //ToDo: make proper low-level error handling
    }
    else{
      header('Location:'.$responseData['redirect']);
      exit();
    }
  }
  load_view($responseData['view'], $responseData['data']);
}

/**
 * Makes scope for view data, shows base template frame
 * and adds globals view variables (for all actions).
 * 
 * @param string $view_name
 * @param array $data
 */
function load_view($view_name, $data) {
  /* ? Check $view_name ? */
  if (file_exists(SITE_PATH . '/views/' . $view_name . '.inc.php')) {
    // Add global view variabls to this scope
    $user = get_authorized_user();
    // Make response
    require SITE_PATH . '/views/_blocks/header.inc.php';
    require SITE_PATH . '/views/' . $view_name . '.inc.php';
    require SITE_PATH . '/views/_blocks/footer.inc.php';
  } else {
    // In more complex system better use exceptions.
    exit('No such template: ' . $view_name . '.inc.php');
  }
}

/**
 * Shows 403 page
 */
function error403() {
  // Site has to have this template!
  return [ 'view' => 'error_403', 'data' => []];;
}

/**
 * Shows 404 page for concrete thing that wasn't found.
 * 
 * @param string $entity
 */
function error404($entity = 'page') {
  // Site has to have this template!
  return [ 'view' => 'error_404', 'data' => ['entity' => $entity]];
}
