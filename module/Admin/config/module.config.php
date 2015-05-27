<?php

return array(
    'router' => array(
        'routes' => array(
            'admin' => array(
                'type' => 'hostname',
                'options' => array(
                    'route' => 'admin.todo-local.com',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Admin\Controller',
                        'controller' => 'Admin\Controller\Auth',
                        'action' => 'index',
                    ),
                ),
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Auth' => 'Admin\Controller\AuthController',
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'admin/layout/login' => __DIR__ . '/../view/layout/login.phtml',
            'admin/layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'admin/index/index' => __DIR__ . '/../view/store/index/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);