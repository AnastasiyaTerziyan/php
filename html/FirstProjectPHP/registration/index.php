<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app->post('/register', function (Request $request) use ($app) {
    $validator = new ValidatorNamespace\Validator();
    $isValidUser = true;
    $user = new EntityNamespace\User($request->get('name'), $request->get('login'), $request->get('age'), $request->get('password'));
    $notices = $validator->validateUser($user);
    if (count($notices)) {
        $isValidUser = FALSE;
    }
    
    if ($isValidUser) {
        $fp = fopen('/home/anastasia/NetBeansProjects/FirstProjectPHP/registration/data.csv', 'a');
        $array = array($user ->getName(), $user ->getLogin(), $user->getAge(), $user ->getPassword());
        fputcsv($fp, $array);
        fclose($fp);
        return new Response($user->toString(), 200);
    } else {
        return new Response(implode(", ", $notices), 406);
    }
});

$app->run();
