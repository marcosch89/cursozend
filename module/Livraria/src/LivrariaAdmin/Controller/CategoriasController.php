<?php

namespace LivrariaAdmin\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModelx;

class CategoriasController extends AbstractActionController {
    /**
     *
     * @var type EntityManager
     */
    protected $em;


    public function indexAction() {
        
        $list = $this->getEm()
                ->getRepository('Livraria\Entity\Categoria')
                ->findAll();
        
        return new ViewModel(array('data'=>$list));
                
         
    }
    
    
    /**
     * @return EntityManager
     */
    
    protected function getEm() {
        if(null === $this-em)
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        
        return $this->em;
    }
}
