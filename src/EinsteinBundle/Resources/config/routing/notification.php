<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_notification_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Notification:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_notification_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Notification:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_notification_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Notification:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_notification_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Notification:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_notification_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Notification:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
