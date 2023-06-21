<?php
{licenseBlock}

namespace oat\taoExample\controller;

/**
 * Sample controller
 *
 * @author Open Assessment Technologies SA
 * @package taoExample
 * @license GPL-2.0
 *
 */
class TaoExample extends \tao_actions_CommonModule {

    /**
     * initialize the services
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * A possible entry point to tao
     */
    public function index() {
        echo __("Hello World");
    }

    public function templateExample() {
        $this->setData('author', 'Open Assessment Technologies SA');
        $this->setView('TaoExample/templateExample.tpl');
    }
}