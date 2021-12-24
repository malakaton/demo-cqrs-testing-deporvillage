<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/return-order' => [[['_route' => 'app_returnorder_infrastructure_http_createreturnorder__invoke', '_controller' => 'App\\ReturnOrder\\Infrastructure\\Http\\Controller\\CreateReturnOrderController'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/return\\-order/([^/]++)/pickup(*:37)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [
            [['_route' => 'app_returnorder_infrastructure_http_pickuprequest__invoke', '_controller' => 'App\\ReturnOrder\\Infrastructure\\Http\\Controller\\PickupRequestController'], ['uuid'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
