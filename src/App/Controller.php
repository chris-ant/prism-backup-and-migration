<?php 

namespace PrismBackupAndMigration\App;

class Controller {
    protected array $arguments;

    protected function render($view, $data = []) {
        extract($data);

        include "Views/$view.php";
    }
}