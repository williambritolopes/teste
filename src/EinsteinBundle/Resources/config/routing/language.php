<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_language_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Language:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_language_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Language:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_language_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Language:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_language_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Language:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_language_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Language:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
