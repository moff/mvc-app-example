<?php
$config = new Dotenv\Dotenv(__DIR__);
$config->load();

return [
    'paths' =>
        array (
            'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
            'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds',
        ),
    'environments' =>
        array (
            'default_migration_table' => 'phinxlog',
            'default_database' => 'development',
            'production' =>
                array (
                    'adapter' => 'mysql',
                    'host' => 'localhost',
                    'name' => 'production_db',
                    'user' => 'root',
                    'pass' => '',
                    'port' => 3306,
                    'charset' => 'utf8',
                ),
            'development' =>
                array (
                    'adapter' => 'mysql',
                    'host' => 'localhost',
                    'name' => getenv('DB_NAME'),
                    'user' => getenv('DB_USER'),
                    'pass' => getenv('DB_PASS'),
                    'port' => 3306,
                    'charset' => 'utf8',
                ),
            'testing' =>
                array (
                    'adapter' => 'mysql',
                    'host' => 'localhost',
                    'name' => 'testing_db',
                    'user' => 'root',
                    'pass' => '',
                    'port' => 3306,
                    'charset' => 'utf8',
                ),
        ),
    'version_order' => 'creation',
];