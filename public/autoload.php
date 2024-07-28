<?php
// Define directory separator for file paths
define("DS", DIRECTORY_SEPARATOR);

// Define root path of the application
define("ROOT_PATH", dirname(__DIR__) . DS);

// Define paths for different directories within the application
define("APP", ROOT_PATH . 'APP' . DS);
define("CORE", APP . 'Core' . DS);
define("CONFIG", APP . 'Config' . DS);
define("CONTROLLERS", APP . 'Controllers' . DS);
define("MODELS", APP . 'Models' . DS);
define("VIEWS", APP . 'Views' . DS);

// Autoload all classes
$modules = [ROOT_PATH, APP, CORE, VIEWS, CONTROLLERS, MODELS, CONFIG];
// Add directories to the include path
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));
// Register the autoloader function
spl_autoload_register('spl_autoload');

// Instantiate the main application class
new App();