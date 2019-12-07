<?php include __DIR__.'/vendor/autoload.php';
use Medoo\Medoo;

// Initialize
try {
    $db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'loginsencillo',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    ]);
}catch (Exception $e){
    $db = null;
    echo 'ERROR: ',  $e->getMessage();
}

?>