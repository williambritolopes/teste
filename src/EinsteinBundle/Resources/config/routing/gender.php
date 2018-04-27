<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_gender_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Gender:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_gender_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Gender:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_gender_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Gender:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_gender_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Gender:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_gender_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Gender:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
