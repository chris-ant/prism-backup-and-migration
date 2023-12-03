<?php

namespace PrismBackupAndMigration\App;

class Framework
{
    public function __construct(private Router $router, private string $uri) {}

    public function dispatch($uri) {
        if (array_key_exists($uri, $this->router->routes)) {
            $controller = $this->router->routes[$uri]['controller'];
            $action = $this->router->routes[$uri]['action'];
            
            $arguments = array(
                'uri'       => $this->uri,
                'routes'    => $this->router->routes
            );

            $controller = new $controller();
            $controller->$action($arguments);
        } else {
            wp_die("No route found for URI: $uri", "Nothing here", array('response' => 200));
            // return 200 so it works with htmx without doing anything else. 
        }
    }
}