<?php
namespace Core;

use Jenssegers\Blade\Blade;

class BladeEngine
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    protected static $instance;

    /**
     * @param $viewsPath
     * @param $viewsCachePath
     * @return Singleton
     */
    public static function getInstance($viewsPath, $viewsCachePath)
    {
        if (null === static::$instance) {
            static::$instance = new Blade($viewsPath, $viewsCachePath);
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }
}