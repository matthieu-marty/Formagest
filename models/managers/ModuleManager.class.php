<?php

require_once 'models/classes/Model.class.php';
require_once 'models/classes/Module.class.php';

Class ModuleManager {

    private $modules;

    public function addModule($module)
    {
        $this->module[] = $module;
    }
}