<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('einstein_comment_index', new Route(
    '/',
    array('_controller' => 'EinsteinBundle:Comment:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_comment_show', new Route(
    '/{id}/show',
    array('_controller' => 'EinsteinBundle:Comment:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('einstein_comment_new', new Route(
    '/new',
    array('_controller' => 'EinsteinBundle:Comment:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_comment_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'EinsteinBundle:Comment:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('einstein_comment_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'EinsteinBundle:Comment:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
