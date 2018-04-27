<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_version_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Version:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_version_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Version:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_version_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Version:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_version_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Version:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_version_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Version:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
