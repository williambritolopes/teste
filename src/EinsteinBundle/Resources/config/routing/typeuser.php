<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_typeuser_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:TypeUser:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_typeuser_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:TypeUser:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_typeuser_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:TypeUser:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_typeuser_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:TypeUser:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_typeuser_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:TypeUser:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
