<?php namespace Pixie\ConnectionAdapters;

use Viocon\Container;

abstract class BaseAdapter
{
    /**
     * @var \Viocon\Container
     */
    protected $container;

    /**
     * @param \Viocon\Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @param $config
     *
     * @return \PDO
     */
    public function connect($config)
    {
        if (!isset($config['options'])) {
            $config['options'] = array();
        }
        return $this->doConnect($config);
    }

    /**
     * @param $config
     *
     * @return mixed
     */
    abstract protected function doConnect($config);
}
