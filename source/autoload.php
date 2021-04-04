<?php

spl_autoload_register(function ($calledClassName) {

    $normalizedClassName = preg_replace('`^\\\\`', '', $calledClassName);

    if(strpos($normalizedClassName, 'WoowTheme') === 0) {

        $relativeClassName = str_replace('WoowTheme', '', $normalizedClassName);
        $relativePath = str_replace('\\', '/', $relativeClassName);
        $definitionClass = __DIR__.''.$relativePath.'.php';
        if(is_file($definitionClass)) {
            include($definitionClass);
        }
    }
});