<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/ads' => [[['_route' => 'app_ads_index', '_controller' => 'App\\Controller\\AdsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ads/new' => [[['_route' => 'app_ads_new', '_controller' => 'App\\Controller\\AdsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/badge' => [[['_route' => 'app_badge_index', '_controller' => 'App\\Controller\\BadgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/badge/new' => [[['_route' => 'app_badge_new', '_controller' => 'App\\Controller\\BadgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidature' => [[['_route' => 'app_candidature_index', '_controller' => 'App\\Controller\\CandidatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidature/new' => [[['_route' => 'app_candidature_new', '_controller' => 'App\\Controller\\CandidatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/captcha' => [[['_route' => 'app_captcha_index', '_controller' => 'App\\Controller\\CaptchaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/captcha/new' => [[['_route' => 'app_captcha_new', '_controller' => 'App\\Controller\\CaptchaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/certif/badge' => [[['_route' => 'app_certif_badge_index', '_controller' => 'App\\Controller\\CertifBadgeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/certif/badge/new' => [[['_route' => 'app_certif_badge_new', '_controller' => 'App\\Controller\\CertifBadgeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/certification' => [[['_route' => 'app_certification_index', '_controller' => 'App\\Controller\\CertificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/certification/new' => [[['_route' => 'app_certification_new', '_controller' => 'App\\Controller\\CertificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrat' => [[['_route' => 'app_contrat_index', '_controller' => 'App\\Controller\\ContratController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contrat/new' => [[['_route' => 'app_contrat_new', '_controller' => 'App\\Controller\\ContratController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/new' => [[['_route' => 'app_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/entretien' => [[['_route' => 'app_entretien_index', '_controller' => 'App\\Controller\\EntretienController::index'], null, ['GET' => 0], null, true, false, null]],
        '/entretien/new' => [[['_route' => 'app_entretien_new', '_controller' => 'App\\Controller\\EntretienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evennement' => [[['_route' => 'app_evennement_index', '_controller' => 'App\\Controller\\EvennementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evennement/new' => [[['_route' => 'app_evennement_new', '_controller' => 'App\\Controller\\EvennementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offre' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offre/new' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/participation' => [[['_route' => 'app_participation_index', '_controller' => 'App\\Controller\\ParticipationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/participation/new' => [[['_route' => 'app_participation_new', '_controller' => 'App\\Controller\\ParticipationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question/reponse' => [[['_route' => 'app_question_reponse_index', '_controller' => 'App\\Controller\\QuestionReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/question/reponse/new' => [[['_route' => 'app_question_reponse_new', '_controller' => 'App\\Controller\\QuestionReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/quiz' => [[['_route' => 'app_quiz_index', '_controller' => 'App\\Controller\\QuizController::index'], null, ['GET' => 0], null, true, false, null]],
        '/quiz/new' => [[['_route' => 'app_quiz_new', '_controller' => 'App\\Controller\\QuizController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/avis' => [[['_route' => 'app_reclamation_avis_index', '_controller' => 'App\\Controller\\ReclamationAvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/avis/new' => [[['_route' => 'app_reclamation_avis_new', '_controller' => 'App\\Controller\\ReclamationAvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sponsor/new' => [[['_route' => 'app_sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0], null, true, false, null]],
        '/test/new' => [[['_route' => 'app_test_new', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/mouh' => [[['_route' => 'app_utilisateur_indexxx', '_controller' => 'App\\Controller\\UtilisateurController::indexx'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ads/([^/]++)(?'
                    .'|(*:23)'
                    .'|/edit(*:35)'
                    .'|(*:42)'
                .')'
                .'|/badge/([^/]++)(?'
                    .'|(*:68)'
                    .'|/edit(*:80)'
                    .'|(*:87)'
                .')'
                .'|/c(?'
                    .'|a(?'
                        .'|ndidature/([^/]++)(?'
                            .'|(*:125)'
                            .'|/edit(*:138)'
                            .'|(*:146)'
                        .')'
                        .'|ptcha/([^/]++)(?'
                            .'|(*:172)'
                            .'|/edit(*:185)'
                            .'|(*:193)'
                        .')'
                        .'|tegorie/([^/]++)(?'
                            .'|(*:221)'
                            .'|/edit(*:234)'
                            .'|(*:242)'
                        .')'
                    .')'
                    .'|ertif(?'
                        .'|/badge/([^/]++)(?'
                            .'|(*:278)'
                            .'|/edit(*:291)'
                            .'|(*:299)'
                        .')'
                        .'|ication/([^/]++)(?'
                            .'|(*:327)'
                            .'|/edit(*:340)'
                            .'|(*:348)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|ntrat/([^/]++)(?'
                            .'|(*:379)'
                            .'|/edit(*:392)'
                            .'|(*:400)'
                        .')'
                        .'|urs/([^/]++)(?'
                            .'|(*:424)'
                            .'|/edit(*:437)'
                            .'|(*:445)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|ntretien/([^/]++)(?'
                        .'|(*:481)'
                        .'|/edit(*:494)'
                        .'|(*:502)'
                    .')'
                    .'|vennement/([^/]++)(?'
                        .'|(*:532)'
                        .'|/edit(*:545)'
                        .'|(*:553)'
                    .')'
                .')'
                .'|/offre/([^/]++)(?'
                    .'|(*:581)'
                    .'|/edit(*:594)'
                    .'|(*:602)'
                .')'
                .'|/participation/([^/]++)(?'
                    .'|(*:637)'
                    .'|/edit(*:650)'
                    .'|(*:658)'
                .')'
                .'|/qu(?'
                    .'|estion/reponse/([^/]++)(?'
                        .'|(*:699)'
                        .'|/edit(*:712)'
                        .'|(*:720)'
                    .')'
                    .'|iz/([^/]++)(?'
                        .'|(*:743)'
                        .'|/edit(*:756)'
                        .'|(*:764)'
                    .')'
                .')'
                .'|/reclamation/avis/([^/]++)(?'
                    .'|(*:803)'
                    .'|/edit(*:816)'
                    .'|(*:824)'
                .')'
                .'|/sponsor/([^/]++)(?'
                    .'|(*:853)'
                    .'|/edit(*:866)'
                    .'|(*:874)'
                .')'
                .'|/test/([^/]++)(?'
                    .'|(*:900)'
                    .'|/edit(*:913)'
                    .'|(*:921)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:954)'
                    .'|/edit(*:967)'
                    .'|(*:975)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1015)'
                    .'|wdt/([^/]++)(*:1036)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1083)'
                            .'|router(*:1098)'
                            .'|exception(?'
                                .'|(*:1119)'
                                .'|\\.css(*:1133)'
                            .')'
                        .')'
                        .'|(*:1144)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'app_ads_show', '_controller' => 'App\\Controller\\AdsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        35 => [[['_route' => 'app_ads_edit', '_controller' => 'App\\Controller\\AdsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        42 => [[['_route' => 'app_ads_delete', '_controller' => 'App\\Controller\\AdsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        68 => [[['_route' => 'app_badge_show', '_controller' => 'App\\Controller\\BadgeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_badge_edit', '_controller' => 'App\\Controller\\BadgeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        87 => [[['_route' => 'app_badge_delete', '_controller' => 'App\\Controller\\BadgeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_candidature_show', '_controller' => 'App\\Controller\\CandidatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_candidature_edit', '_controller' => 'App\\Controller\\CandidatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_candidature_delete', '_controller' => 'App\\Controller\\CandidatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        172 => [[['_route' => 'app_captcha_show', '_controller' => 'App\\Controller\\CaptchaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'app_captcha_edit', '_controller' => 'App\\Controller\\CaptchaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        193 => [[['_route' => 'app_captcha_delete', '_controller' => 'App\\Controller\\CaptchaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        221 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_certif_badge_show', '_controller' => 'App\\Controller\\CertifBadgeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_certif_badge_edit', '_controller' => 'App\\Controller\\CertifBadgeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'app_certif_badge_delete', '_controller' => 'App\\Controller\\CertifBadgeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_certification_show', '_controller' => 'App\\Controller\\CertificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_certification_edit', '_controller' => 'App\\Controller\\CertificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        348 => [[['_route' => 'app_certification_delete', '_controller' => 'App\\Controller\\CertificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_contrat_show', '_controller' => 'App\\Controller\\ContratController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'app_contrat_edit', '_controller' => 'App\\Controller\\ContratController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_contrat_delete', '_controller' => 'App\\Controller\\ContratController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        424 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        481 => [[['_route' => 'app_entretien_show', '_controller' => 'App\\Controller\\EntretienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        494 => [[['_route' => 'app_entretien_edit', '_controller' => 'App\\Controller\\EntretienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        502 => [[['_route' => 'app_entretien_delete', '_controller' => 'App\\Controller\\EntretienController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        532 => [[['_route' => 'app_evennement_show', '_controller' => 'App\\Controller\\EvennementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'app_evennement_edit', '_controller' => 'App\\Controller\\EvennementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        553 => [[['_route' => 'app_evennement_delete', '_controller' => 'App\\Controller\\EvennementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        581 => [[['_route' => 'app_offre_show', '_controller' => 'App\\Controller\\OffreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        594 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        602 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        637 => [[['_route' => 'app_participation_show', '_controller' => 'App\\Controller\\ParticipationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        650 => [[['_route' => 'app_participation_edit', '_controller' => 'App\\Controller\\ParticipationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        658 => [[['_route' => 'app_participation_delete', '_controller' => 'App\\Controller\\ParticipationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        699 => [[['_route' => 'app_question_reponse_show', '_controller' => 'App\\Controller\\QuestionReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        712 => [[['_route' => 'app_question_reponse_edit', '_controller' => 'App\\Controller\\QuestionReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        720 => [[['_route' => 'app_question_reponse_delete', '_controller' => 'App\\Controller\\QuestionReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        743 => [[['_route' => 'app_quiz_show', '_controller' => 'App\\Controller\\QuizController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        756 => [[['_route' => 'app_quiz_edit', '_controller' => 'App\\Controller\\QuizController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        764 => [[['_route' => 'app_quiz_delete', '_controller' => 'App\\Controller\\QuizController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        803 => [[['_route' => 'app_reclamation_avis_show', '_controller' => 'App\\Controller\\ReclamationAvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        816 => [[['_route' => 'app_reclamation_avis_edit', '_controller' => 'App\\Controller\\ReclamationAvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        824 => [[['_route' => 'app_reclamation_avis_delete', '_controller' => 'App\\Controller\\ReclamationAvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        853 => [[['_route' => 'app_sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        866 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        874 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        900 => [[['_route' => 'app_test_show', '_controller' => 'App\\Controller\\TestController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        913 => [[['_route' => 'app_test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        921 => [[['_route' => 'app_test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        954 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        967 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        975 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1015 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1036 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1083 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1098 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1119 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1133 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1144 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
