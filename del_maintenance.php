<?php
// Auto-destruct script
$maintenance_file = dirname(__FILE__) . '/.maintenance';
if (file_exists($maintenance_file)) {
    unlink($maintenance_file);
    echo 'Maintenance file deleted!';
} else {
    echo 'No maintenance file found. Path: ' . dirname(__FILE__);
}
// Also check parent
$parent = dirname(dirname(__FILE__)) . '/.maintenance';
if (file_exists($parent)) {
    unlink($parent);
    echo ' + Parent deleted!';
}
