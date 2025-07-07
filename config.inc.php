<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Pdo_Mysql', 'dogcare');
$db->addServer(array (
  'host' => 'mysql2.sqlpub.com:3307',
  'port' => 3306,
  'user' => 'dogcare',
  'password' => 'cQo0oXW6xLLSsa7f',
  'charset' => 'utf8mb4',
  'database' => 'dogcare',
  'engine' => 'InnoDB',
  'sslCa' => NULL,
  'sslVerify' => false,
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
