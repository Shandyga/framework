<?php 

require_once dirname(__DIR__).'/config/init.php';
require_once LIBS.'/functions.php';
require_once CONF.'/routes.php';

$app = new \mast\App();

//debug(\mast\Router::getRoutes());

// throw new Exception('Страница не найдена', 500);