<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'simple_blog');
define('DB_USER', 'root');
define('DB_PASS', '');

// Автозавантаження класів
spl_autoload_register(function ($class) {
    $prefix = 'models\\';
    $base_dir = __DIR__ . '/../models/';
    
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

?>
