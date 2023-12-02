<?php 

namespace PrismBackupAndMigration\App;

class Router {
    
    public $routes = [];

    public function addRoute($route, $name, $controller, $action) {
        $this->routes[$route] = ['name' => $name, 'controller' => $controller, 'action' => $action];
    }
}
    