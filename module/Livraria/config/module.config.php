<?php

return array(
    'router' => array(
        'routes' => array(
            'livraria-home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/livraria',
                    'defaults' => array(
                        'controller' => 'Livraria\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'livraria-admin' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/admin/[:controller[/:action]]',
                    'defaults' => array(
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Livraria\Controller\Index' => 'Livraria\Controller\IndexController',
            'categorias' => 'LivrariaAdmin\Controller\CategoriasController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'livraria/index/index' => __DIR__ . '/../view/livraria/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo'
            ),
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'livraria' => array(
                'paths' => array(__DIR__ . '/../src/Livraria/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Livraria\Entity' => 'livraria'
                ),
            ),
        ),
    ),
);
