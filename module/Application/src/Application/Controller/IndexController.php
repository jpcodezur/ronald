<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function productAction()
    {
        $productId = (int) $this->getEvent()->getRouteMatch()->getParam('productId',null);
        
        return new ViewModel();
    }
    
    public function masonryAction()
    {
        $view = new ViewModel();
        $view->setTerminal(true);    
        return $view;
    }
    
}
