<?php

define('URL','/moad/project/');

define('PATH_SETTING','<?php define(\'URL\',\'/moad/project/cloud/');
define('HTACCESS_BEGINNING','Options -MultiViews'."\n".'RewriteEngine On');
define('HTACCESS_PATH','RewriteBase /moad/project/cloud/');
define('HTACCESS_END','RewriteCond %{REQUEST_FILENAME} !-d' . "\n" . 'RewriteCond %{REQUEST_FILENAME} !-f' . "\n" . 'RewriteCond %{REQUEST_FILENAME} !-l' ."\n". 'RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]');

