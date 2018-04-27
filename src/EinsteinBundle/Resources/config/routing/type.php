<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_type_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Type:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_type_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Type:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_type_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Type:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_type_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Type:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_type_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Type:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
