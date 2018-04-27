<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_favorite_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Favorite:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_favorite_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Favorite:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_favorite_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Favorite:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_favorite_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Favorite:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_favorite_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Favorite:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
