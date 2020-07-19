<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'add_folder' => [['id'], ['_controller' => 'App\\Controller\\FolderAddController::addFolder'], [], [['text', '/add/folder'], ['variable', '/', '[^/]++', 'id']], [], []],
    'project' => [['project'], ['_controller' => 'App\\Controller\\ProjectController::index'], [], [['text', '/allSubFolder'], ['variable', '/', '[^/]++', 'project'], ['text', '/project']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'server_dashboard' => [['id'], ['_controller' => 'App\\Controller\\ServerDashboardController::dashboard'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/dashboard']], [], []],
    'add_subFolder_in_folder' => [['id'], ['_controller' => 'App\\Controller\\SubFolderAddController::addSubFolderInFolder'], [], [['text', '/add/sub_folder'], ['variable', '/', '[^/]++', 'id']], [], []],
    'sub_folder_add_to_project' => [['jsId', 'id'], ['_controller' => 'App\\Controller\\SubFolderAddToProjectController::index'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Add-To-Project'], ['variable', '/', '[^/]++', 'jsId'], ['text', '/Sub-Folder']], [], []],
    'sub_folder_remove_from_project' => [['jsId', 'id'], ['_controller' => 'App\\Controller\\SubFolderRemoveFromProjectController::index'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Remove-From-Project'], ['variable', '/', '[^/]++', 'jsId'], ['text', '/Sub-Folder']], [], []],
    'sub_folder_request' => [['id', 'project', 'server'], ['project' => null, '_controller' => 'App\\Controller\\SubFolderRequestController::subFolderRequest'], [], [['variable', '/', '[^/]++', 'server'], ['variable', '/', '[^/]++', 'project'], ['text', '/request'], ['variable', '/', '[^/]++', 'id'], ['text', '/Sub-Folder']], [], []],
];
