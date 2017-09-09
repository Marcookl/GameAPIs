<?php

namespace GameAPIs\Controllers\Documentation\COD;

class IndexController extends ControllerBase {

    public function initialize() {
        $this->tag->setTitle('GameAPIs');
    }

    public function indexAction() {
        $this->tag->prependTitle('Call of Duty Documentation - ');
    }

}
