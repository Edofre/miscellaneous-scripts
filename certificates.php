<?php



if ($handle = opendir('/etc/nginx/ssl')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'crt') {
            var_dump($file);
        }
    }
    closedir($handle);
}