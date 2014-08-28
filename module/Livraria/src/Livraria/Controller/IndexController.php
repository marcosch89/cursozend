<?php


namespace Livraria\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $nome = "School of Net";
        return new ViewModel(array('nome'=>$nome));
    }
}
