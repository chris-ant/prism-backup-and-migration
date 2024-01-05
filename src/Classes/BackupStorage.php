<?php
namespace PrismBackupAndMigration\Classes;

/**
 * Abstract class BackupStorage
 *
 * Represents the abstract backup storage with common methods.
 */
abstract class BackupStorage {
    abstract public function storeBackup(Backup $backup): void;
    abstract public function retrieveBackup(): Backup;
}