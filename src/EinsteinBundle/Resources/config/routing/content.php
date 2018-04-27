<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_content_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Content:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_content_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Content:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_content_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Content:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_content_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Content:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_content_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Content:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
