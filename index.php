<?php
$r = parse_url('https://www.fsodic.com'.$_SERVER['REQUEST_URI'], PHP_URL_PATH);
$r = trim($r, '/');

echo 'Access: <b>'.$r.'</b>';
