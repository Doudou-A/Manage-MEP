<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/Project/Create' => [[['_route' => 'project_create', '_controller' => 'App\\Controller\\ProjectCreateController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/([^/]++)/add/folder(*:189)'
                .'|/project/([^/]++)/allSubFolder(*:227)'
                .'|/Dashboard/([^/]++)(*:254)'
                .'|/([^/]++)/Add/Sub\\-Folder(?:/([^/]++))?(*:301)'
                .'|/Sub\\-Folder/([^/]++)/(?'
                    .'|Add\\-To\\-Project/([^/]++)(*:359)'
                    .'|Remove\\-From\\-Project/([^/]++)(*:397)'
                    .'|request/([^/]++)/([^/]++)(*:430)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'add_folder', '_controller' => 'App\\Controller\\FolderAddController::addFolder'], ['id'], null, null, false, false, null]],
        227 => [[['_route' => 'project', '_controller' => 'App\\Controller\\ProjectController::index'], ['project'], null, null, false, false, null]],
        254 => [[['_route' => 'server_dashboard', '_controller' => 'App\\Controller\\ServerDashboardController::dashboard'], ['slug'], null, null, false, true, null]],
        301 => [[['_route' => 'add_subFolder_in_folder', 'project' => null, '_controller' => 'App\\Controller\\SubFolderAddController::addSubFolderInFolder'], ['id', 'project'], null, null, false, true, null]],
        359 => [[['_route' => 'sub_folder_add_to_project', '_controller' => 'App\\Controller\\SubFolderAddToProjectController::index'], ['jsId', 'id'], null, null, false, true, null]],
        397 => [[['_route' => 'sub_folder_remove_from_project', '_controller' => 'App\\Controller\\SubFolderRemoveFromProjectController::index'], ['jsId', 'id'], null, null, false, true, null]],
        430 => [
            [['_route' => 'sub_folder_request', '_controller' => 'App\\Controller\\SubFolderRequestController::subFolderRequest'], ['id', 'project', 'server'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
