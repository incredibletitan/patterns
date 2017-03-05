<?php
require_once __DIR__ . '/../bootstrap.php';

$login = new \libs\Login();
new \libs\SecurityMonitoring($login);

for ($i = 0; $i < 100; $i++) {
    $login->handleLogin('olo' . $i, $i, '127.0.0.' . $i);
}