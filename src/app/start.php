<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

function render_template(Request $request): Response
{
    extract($request->attributes->all(), EXTR_SKIP);
    ob_start();
    include sprintf( PBM_PLUGIN_DIR_PATH.'src/app/pages/%s.php', $_route );
   
    return new Response(ob_get_clean());
}

$request = Request::createFromGlobals();
$routes = include __DIR__.'/app.php';

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

try {
    // We're using $_GET['path'] as our path info, meaning we can work within the confines of WordPress Admin. 
    $request->attributes->add( $matcher->match($request->query->get('path', 'not_found')) );
    $response = call_user_func($request->attributes->get('_controller'), $request);
} catch (Routing\Exception\ResourceNotFoundException $exception) {
    $response = new Response('Not Found', 404);
} catch (Exception $exception) {
    $response = new Response('An error occurred', 500);
}

$response->send();