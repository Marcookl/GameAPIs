<?php

namespace GameAPIs\Controllers\Documentation\DNL;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {
    public function afterExecuteRoute() {
        $this->view->setPartialsDir($this->view->getViewsDir() . 'partials/');
        $this->view->setViewsDir($this->view->getViewsDir() . 'Documentation/DNL/');
    }
}
