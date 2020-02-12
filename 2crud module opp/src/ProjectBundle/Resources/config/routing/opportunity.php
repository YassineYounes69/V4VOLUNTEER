<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('opportunity_index', new Route(
    '/',
    array('_controller' => 'ProjectBundle:Opportunity:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('opportunity_show', new Route(
    '/{id}/show',
    array('_controller' => 'ProjectBundle:Opportunity:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('opportunity_new', new Route(
    '/new',
    array('_controller' => 'ProjectBundle:Opportunity:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('opportunity_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'ProjectBundle:Opportunity:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('opportunity_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'ProjectBundle:Opportunity:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
