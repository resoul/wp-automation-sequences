<?php
/*
Plugin Name: Automation Sequences
Plugin URI: https://github.com/resoul/wordpress-automation-sequences/
Description: Automation Sequences that's all you need
Version: 0.0.1
Author: ReSoul
Author URI: https://github.com/resoul
License: GPLv2 or later
Text Domain: automation-sequences
*/
if (!function_exists('add_action')) {
    exit;
}
define('AUTOMATION_SEQUENCES_VERSION', '0.0.1');
define('AUTOMATION_SEQUENCES_PLUGIN_DIR', __DIR__);
define('AUTOMATION_SEQUENCES_PLUGIN_SRC', plugin_dir_url( __FILE__ ));

foreach (require __DIR__ . '/classes.php' as $class => $file) {
    if (is_file($file)) {
        include $file;
    } else {
        throw new Exception("Unable to find class $class in file: $file.");
    }
}

use AutomationSequences\AutomationSequence;
use AutomationSequences\Setup\Activator;

register_activation_hook(__FILE__, [Activator::class, 'activation']);
register_deactivation_hook(__FILE__, [Activator::class, 'deactivation']);

$automation = new AutomationSequence();
$automation->run();