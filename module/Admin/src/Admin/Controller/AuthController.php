<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{

    public function indexAction()
    {
        $this->layout('admin/layout/login');
        return new ViewModel();
    }


}

