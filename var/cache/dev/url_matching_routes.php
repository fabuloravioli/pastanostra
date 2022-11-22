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
        '/member' => [[['_route' => 'app_member_index', '_controller' => 'App\\Controller\\MemberController::index'], null, ['GET' => 0], null, true, false, null]],
        '/member/new' => [[['_route' => 'app_member_new', '_controller' => 'App\\Controller\\MemberController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pasta' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PastaController::indexAction'], null, ['GET' => 0], null, true, false, null]],
        '/pasta/list' => [[['_route' => 'pasta_list', '_controller' => 'App\\Controller\\PastaController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/placard' => [[['_route' => 'app_placard_index', '_controller' => 'App\\Controller\\PlacardController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/member/([^/]++)(?'
                    .'|(*:109)'
                    .'|/edit(*:122)'
                    .'|(*:130)'
                .')'
                .'|/p(?'
                    .'|asta/(?'
                        .'|(\\d+)(*:157)'
                        .'|new/([^/]++)(*:177)'
                        .'|(\\d+)/edit(*:195)'
                        .'|([^/]++)(*:211)'
                        .'|mark/(\\d+)(*:229)'
                    .')'
                    .'|lacard/(?'
                        .'|new/([^/]++)(*:260)'
                        .'|([^/]++)(?'
                            .'|(*:279)'
                            .'|/(?'
                                .'|edit(*:295)'
                                .'|pasta/([^/]++)(*:317)'
                            .')'
                            .'|(*:326)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:368)'
                    .'|wdt/([^/]++)(*:388)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:434)'
                            .'|router(*:448)'
                            .'|exception(?'
                                .'|(*:468)'
                                .'|\\.css(*:481)'
                            .')'
                        .')'
                        .'|(*:491)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'cottura_show', '_controller' => 'App\\Controller\\CotturaController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'cottura_edit', '_controller' => 'App\\Controller\\CotturaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        56 => [[['_route' => 'app_cottura_delete', '_controller' => 'App\\Controller\\CotturaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'cottura_newinpasta', '_controller' => 'App\\Controller\\CotturaController::newInPasta'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        109 => [[['_route' => 'app_member_show', '_controller' => 'App\\Controller\\MemberController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        122 => [[['_route' => 'app_member_edit', '_controller' => 'App\\Controller\\MemberController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        130 => [[['_route' => 'app_member_delete', '_controller' => 'App\\Controller\\MemberController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        157 => [[['_route' => 'pasta_show', '_controller' => 'App\\Controller\\PastaController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        177 => [[['_route' => 'app_pasta_new', '_controller' => 'App\\Controller\\PastaController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        195 => [[['_route' => 'pasta_edit', '_controller' => 'App\\Controller\\PastaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'app_pasta_delete', '_controller' => 'App\\Controller\\PastaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        229 => [[['_route' => 'pasta_mark', '_controller' => 'App\\Controller\\PastaController::markAction'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'app_placard_new', '_controller' => 'App\\Controller\\PlacardController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        279 => [[['_route' => 'app_placard_show', '_controller' => 'App\\Controller\\PlacardController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'app_placard_edit', '_controller' => 'App\\Controller\\PlacardController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'app_placard_pasta_show', '_controller' => 'App\\Controller\\PlacardController::PastaShow'], ['placard_id', 'pasta_id'], ['GET' => 0], null, false, true, null]],
        326 => [[['_route' => 'app_placard_delete', '_controller' => 'App\\Controller\\PlacardController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        388 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        434 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        448 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        468 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        481 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        491 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
