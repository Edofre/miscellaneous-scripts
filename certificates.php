<?php

// Make a certificates dir
if (!is_dir('certificates')) {
    mkdir('certificates');
}

// Find all our .crt files
if ($handle = opendir('/etc/nginx/ssl')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'crt') {

            copy("/etc/nginx/ssl/{$file}", "certificates/{$file}");

            var_dump("Copied: {$file}");
        }
    }
    closedir($handle);
}

