<?php 

namespace  PrismBackupAndMigration\App\Controllers;

use PrismBackupAndMigration\App\Controller;
use PrismBackupAndMigration\App\Models\ExportAdmin;

class ImportAdminController extends Controller {
    public function index(array $arguments) {
        $this->arguments = $arguments;

        $model = new ExportAdmin;
        
        $local_arguments = array(
            'title' => __('Import Site', 'prism-backup-and-migration'),
            'content_url' => $model->content_url()
        );
        $this->arguments = array_merge($this->arguments, $local_arguments);
        
        $this->render('importadmin', $this->arguments);
    }
}