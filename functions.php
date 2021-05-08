<?php
use WoowTheme\Theme;

require __DIR__.'/static-vendor/woof/autoload.php';
require __DIR__.'/source/autoload.php';


$theme = Theme::getInstance();
$theme->register();
