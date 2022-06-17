<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/formations' => [[['_route' => 'formations', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.formations', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::index'], null, null, null, false, false, null]],
        '/admin/ajout' => [[['_route' => 'admin.formation.ajout', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::ajout'], null, null, null, false, false, null]],
        '/admin/niveaux' => [[['_route' => 'admin.niveaux', '_controller' => 'App\\Controller\\admin\\AdminNiveauxController::index'], null, null, null, false, false, null]],
        '/admin/niveaux/ajout' => [[['_route' => 'admin.niveau.ajout', '_controller' => 'App\\Controller\\admin\\AdminNiveauxController::ajoutNiveau'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/formations/(?'
                    .'|tri(?'
                        .'|/([^/]++)/([^/]++)(*:46)'
                        .'|Niveau/([^/]++)(*:68)'
                    .')'
                    .'|recherche/([^/]++)(*:94)'
                    .'|formation/([^/]++)(*:119)'
                .')'
                .'|/admin/(?'
                    .'|suppr/([^/]++)(*:152)'
                    .'|edit/([^/]++)(*:173)'
                    .'|formations/(?'
                        .'|tri(?'
                            .'|/([^/]++)/([^/]++)(*:219)'
                            .'|Niveau/([^/]++)(*:242)'
                        .')'
                        .'|recherche/([^/]++)(*:269)'
                    .')'
                    .'|niveau/suppr/([^/]++)(*:299)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'formations.sort', '_controller' => 'App\\Controller\\FormationsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        68 => [[['_route' => 'formations.niveau', '_controller' => 'App\\Controller\\FormationsController::sortNiveau'], ['valeur'], null, null, false, true, null]],
        94 => [[['_route' => 'formations.findallcontain', '_controller' => 'App\\Controller\\FormationsController::findAllContain'], ['champ'], null, null, false, true, null]],
        119 => [[['_route' => 'formations.showone', '_controller' => 'App\\Controller\\FormationsController::showOne'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => 'admin.formation.suppr', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::suppr'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'admin.formation.edit', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::edit'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'admin.formations.sort', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        242 => [[['_route' => 'admin.formations.niveau', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::sortNiveau'], ['valeur'], null, null, false, true, null]],
        269 => [[['_route' => 'admin.formations.findallcontain', '_controller' => 'App\\Controller\\admin\\AdminFormationsController::findAllContain'], ['champ'], null, null, false, true, null]],
        299 => [
            [['_route' => 'admin.niveau.suppr', '_controller' => 'App\\Controller\\admin\\AdminNiveauxController::suppr'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
