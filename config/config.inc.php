<?php


$DB['cddb'] = array(
    'server'=>'localhost',
    'user'=>'cddb',
    'pass'=>'cddb',
    'db'=>'cddb',
);

if(is_file('config.local.inc.php')){
	require_once('config.local.inc.php');
}