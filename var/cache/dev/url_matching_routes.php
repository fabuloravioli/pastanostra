<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cottura/list' => [[['_route' => 'cottura_list', '_controller' => 'App\\Controller\\CotturaController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/cottura/new' => [[['_route' => 'app_cottura_new', '_controller' => 'App\\Controller\\CotturaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pasta' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PastaController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/pasta/list' => [[['_route' => 'pasta_list', '_controller' => 'App\\Controller\\PastaController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/pasta/new' => [[['_route' => 'app_pasta_new', '_controller' => 'App\\Controller\\PastaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/cottura/(?'
                    .'|(\\d+)(*:24)'
                    .'|(\\d+)/edit(*:41)'
                    .'|([^/]++)(*:56)'
                    .'|newinpasta/([^/]++)(*:82)'
                .')'
                .'|/pasta/(?'
                    .'|(\\d+)(*:105)'
                    .'|(\\d+)/edit(*:123)'
                    .'|([^/]++)(*:139)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:179)'
                    .'|wdt/([^/]++)(*:199)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:245)'
                            .'|router(*:259)'
                            .'|exception(?'
                                .'|(*:279)'
                                .'|\\.css(*:292)'
                            .')'
                        .')'
                        .'|(*:302)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'cottura_show', '_controller' => 'App\\Controller\\CotturaController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'cottura_edit', '_controller' => 'App\\Controller\\CotturaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'app_cottura_delete', '_controller' => 'App\\Controller\\CotturaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'cottura_newinpasta', '_controller' => 'App\\Controller\\CotturaController::newInPasta'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        105 => [[['_route' => 'pasta_show', '_controller' => 'App\\Controller\\PastaController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        123 => [[['_route' => 'pasta_edit', '_controller' => 'App\\Controller\\PastaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'app_pasta_delete', '_controller' => 'App\\Controller\\PastaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        179 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        199 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        245 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        279 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        292 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        302 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
