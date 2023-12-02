<?php 

namespace PrismBackupAndMigration\App\Models;

class ExportAdmin {
    private $wp_content_folders;

    public function __construct() {
        $this->wp_content_folders = content_url();
    }

    public function content_url(){
        return $this->wp_content_folders;
    }
}