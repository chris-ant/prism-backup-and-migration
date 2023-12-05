<?php 

namespace PrismBackupAndMigration\App;

class Router {
    
    public $routes = [];

    /**
     * Registers a route
     *
     * @param string $route
     * @param [type] $controller
     * @param string $action
     * @param array $arguments
     * @return void
     */
    public function addRoute(string $route, $controller,string $action) {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }


}
    