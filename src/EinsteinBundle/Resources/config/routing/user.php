<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_user_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:User:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_user_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:User:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_user_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:User:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_user_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:User:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_user_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:User:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
