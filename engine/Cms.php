<?php

namespace Engine;

use Engine\Core\Database\Connection;

class Cms
{

    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run cms
     */
    public function run()
    {

        print_r($this->di);
    }

}