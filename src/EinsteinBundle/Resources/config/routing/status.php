<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_status_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Status:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_status_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Status:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_status_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Status:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_status_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Status:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_status_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Status:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
