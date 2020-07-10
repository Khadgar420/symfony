<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\BlogController::home'], null, null, null, false, false, null]],
        '/hardware' => [[['_route' => 'hardware', '_controller' => 'App\\Controller\\BlogController::hardware'], null, null, null, false, false, null]],
        '/gaming' => [[['_route' => 'gaming', '_controller' => 'App\\Controller\\BlogController::gaming'], null, null, null, false, false, null]],
        '/blog/new' => [[['_route' => 'blog_create', '_controller' => 'App\\Controller\\BlogController::create'], null, null, null, false, false, null]],
        '/privacy-statement' => [[['_route' => 'privacy-statement', '_controller' => 'App\\Controller\\BlogController::private'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/cookie_consent' => [[['_route' => 'ch_cookie_consent.show', '_controller' => 'ConnectHolland\\CookieConsentBundle\\Controller\\CookieConsentController::show'], null, null, null, false, false, null]],
        '/cookie_consent_alt' => [[['_route' => 'ch_cookie_consent.show_if_cookie_consent_not_set', '_controller' => 'ConnectHolland\\CookieConsentBundle\\Controller\\CookieConsentController::showIfCookieConsentNotSet'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/blog/([^/]++)(?'
                    .'|/edit(*:29)'
                    .'|(*:36)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'blog_edit', '_controller' => 'App\\Controller\\BlogController::create'], ['id'], null, null, false, false, null]],
        36 => [
            [['_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
