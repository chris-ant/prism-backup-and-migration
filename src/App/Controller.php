<?php 

namespace PrismBackupAndMigration\App;

class Controller {
    protected array $arguments;

    protected function render($view, $data = []) {
        extract($data);

        include "Views/$view.php";
    }

    protected function setup_nav_menu(){
        $args = $this->arguments;

        if (!isset($args['uri']) && !isset($args['routes']))
            return array();

        $menu = array();
        foreach ($args['routes'] as $route => $route_args){
            $menu[$route]['url']    = admin_url('admin.php?page=pbm_admin&path='.$route);
            $menu[$route]['name']   = $route_args['name'];

            if ( $args['uri'] == $route ) {
                $menu[$route]['current_menu_item'] = 'current-menu-item';
            } else {
                $menu[$route]['current_menu_item'] = '';
            }
        }

        $this->arguments['menu'] = $menu;
    }
}