<?php 

namespace  PrismBackupAndMigration\App\Controllers;

use PrismBackupAndMigration\App\Controller;
use PrismBackupAndMigration\App\Models\ExportAdmin;

class ExportAdminController extends Controller {
    public function index() {
        $model = new ExportAdmin;
        $args = array(
            'title' => __('Export Site', 'prism-backup-and-migration'),
            'content_url' => $model->content_url()
        );
        $this->render('exportadmin', $args);
    }
}