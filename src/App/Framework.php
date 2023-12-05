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
            // return 200 so it works with htmx without doing anything else. Not great, not terrible. 
            wp_die("No route found for URI: $uri", "Nothing here", array('response' => 200));            
        }
    }

    /**
     * Generates extra arguments based on what's found inside the route. 
     * Example: /book/id/{id} will generate an argument array('id' => 3)
     * Right now dispatch does not work with this type of routes as it tries to match an exact route against what's found in the path uri. 
     *
     * @param string $route
     * @return array
     */
    private function generateArguments(string $route): array{
        
        return array();
    }
}