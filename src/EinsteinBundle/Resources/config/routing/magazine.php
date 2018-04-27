<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_magazine_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Magazine:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_magazine_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Magazine:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_magazine_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Magazine:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_magazine_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Magazine:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_magazine_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Magazine:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
