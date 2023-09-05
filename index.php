<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

require_once BASE_DIR . '/vendor/autoload.php';

require_once BASE_DIR . '/configs/constants.php';

$data = 48;

dd(json_encode($data));

/*try {
    require_once APP_DIR . 'index.php';

    require_once BASE_DIR . '/configs/router.php';

    $pdo = new PDO();
} catch (Exception $exception) {
    dd($exception->getCode() . ' - "' . $exception->getMessage() . '"');
};*/
