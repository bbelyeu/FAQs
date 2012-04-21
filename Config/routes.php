<?php

Router::connect('/admin/faqs', array(
    'plugin' => 'FAQ',
    'controller' => 'faqs',
    'action' => 'index',
    'prefix' => 'admin'
));

Router::connect('/admin/faqs/:action', array(
    'plugin' => 'FAQ',
    'controller' => 'faqs',
    'prefix' => 'admin'
));

Router::connect('/admin/faqs/:action/:id', array(
    'plugin' => 'FAQ',
    'controller' => 'faqs',
    'prefix' => 'admin'
), array(
    'pass' => array('id'),
    'id' => '[0-9]+'
));

Router::connect('/faqs', array(
    'plugin' => 'FAQ',
    'controller' => 'faqs',
    'action' => 'index',
));
