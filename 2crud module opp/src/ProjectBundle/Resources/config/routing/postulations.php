<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('postulations_index', new Route(
    '/',
    array('_controller' => 'ProjectBundle:Postulations:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('postulations_show', new Route(
    '/{id}/show',
    array('_controller' => 'ProjectBundle:Postulations:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('postulations_new', new Route(
    '/new',
    array('_controller' => 'ProjectBundle:Postulations:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('postulations_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'ProjectBundle:Postulations:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('postulations_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'ProjectBundle:Postulations:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
