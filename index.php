
<?php
try {
    require_once 'core/init.php';
    $app = new App;
}

//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
