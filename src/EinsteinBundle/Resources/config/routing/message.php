<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_message_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Message:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_message_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Message:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_message_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Message:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_message_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Message:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_message_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Message:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
