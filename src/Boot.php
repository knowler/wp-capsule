<?php

namespace KnowlerKnows\WP\Capsule;

use KnowlerKnows\WP\Capsule\Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Support\Collection;

class Boot
{
    /**
     * Capsule.
     */
    protected $capsule;

    /**
     * Configuration.
     */
    protected $config;

    public function __construct()
    {
        /** Get the config */
        $this->config = require_once dirname(__DIR__) . '/config/config.php';

        /** Create new Capsule instance */
        $this->capsule = new Capsule;

        /** Add the connection details. */
        $this->capsule->addConnection($this->config);

        /** Boot */
        $this->capsule->setEventDispatcher(new Dispatcher(new Container));
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }
}
