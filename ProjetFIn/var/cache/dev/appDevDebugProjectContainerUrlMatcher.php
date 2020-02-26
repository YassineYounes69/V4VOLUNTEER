<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/donation')) {
            // donation_back_index
            if ('/donation/back' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::indexAction',  '_route' => 'donation_back_index',);
            }

            // donationfiltre_index
            if (0 === strpos($pathinfo, '/donation/filtre') && preg_match('#^/donation/filtre/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'donationfiltre_index']), array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::indexfiltreAction',));
            }

            if (0 === strpos($pathinfo, '/donation/new')) {
                // donation_new
                if ('/donation/new' === $pathinfo) {
                    return array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::newAction',  '_route' => 'donation_new',);
                }

                // donation_neww
                if (preg_match('#^/donation/new/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'donation_neww']), array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::newwAction',));
                }

            }

            // donation_show
            if (0 === strpos($pathinfo, '/donation/show') && preg_match('#^/donation/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'donation_show']), array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::showAction',));
            }

            // donation_edit
            if (preg_match('#^/donation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'donation_edit']), array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::editAction',));
            }

            // liste_donation_pdf
            if ('/donation/pdf' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::pdfAction',  '_route' => 'liste_donation_pdf',);
            }

            // donation_delete
            if (preg_match('#^/donation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'donation_delete']), array (  '_controller' => 'ProjectBundle\\Controller\\DonationController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/demande')) {
            // demande_index
            if ('/demande' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::indexAction',  '_route' => 'demande_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_demande_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'demande_index'));
                }

                return $ret;
            }
            not_demande_index:

            // demande_back_index
            if ('/demande/back' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::index_backAction',  '_route' => 'demande_back_index',);
            }

            if (0 === strpos($pathinfo, '/demande/pdf')) {
                // liste_demande_pdf
                if ('/demande/pdf' === $pathinfo) {
                    return array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::pdfAction',  '_route' => 'liste_demande_pdf',);
                }

                // demande_pdf
                if (preg_match('#^/demande/pdf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'demande_pdf']), array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::pdfshowAction',));
                }

            }

            // demande_new
            if ('/demande/new' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::newAction',  '_route' => 'demande_new',);
            }

            // demande_show
            if (0 === strpos($pathinfo, '/demande/show') && preg_match('#^/demande/show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'demande_show']), array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::showAction',));
            }

            // demande_edit
            if (preg_match('#^/demande/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'demande_edit']), array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::editAction',));
            }

            // demande_delete
            if (preg_match('#^/demande/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'demande_delete']), array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::deleteAction',));
            }

            // ajaxx_search
            if ('/demande/search' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\DemandeController::searchAction',  '_route' => 'ajaxx_search',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ajaxx_search;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ajaxx_search'));
                }

                return $ret;
            }
            not_ajaxx_search:

        }

        // project_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::indexAction',  '_route' => 'project_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_project_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'project_homepage'));
            }

            return $ret;
        }
        not_project_homepage:

        // ajouterEvenement
        if ('/ajouterEvenement' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\EvenementController::ajouterEvenementAction',  '_route' => 'ajouterEvenement',);
        }

        // modifierEvenement
        if (preg_match('#^/(?P<reference>[^/]++)/modifierEvenement$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierEvenement']), array (  '_controller' => 'ProjectBundle\\Controller\\EvenementController::modifierEvenementAction',));
        }

        // supprimerEvenement
        if (preg_match('#^/(?P<reference>[^/]++)/supprimerEvenement$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimerEvenement']), array (  '_controller' => 'ProjectBundle\\Controller\\EvenementController::supprimerEvenementAction',));
        }

        // afficherListe
        if ('/afficherListe' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\EvenementController::afficherEvenementsAction',  '_route' => 'afficherListe',);
        }

        // participerEvenement
        if (preg_match('#^/(?P<reference>[^/]++)/participerEvenement$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'participerEvenement']), array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::participerEvenementAction',));
        }

        // abandonnerEvenement
        if (preg_match('#^/(?P<reference>[^/]++)/abandonnerEvenement$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'abandonnerEvenement']), array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::abandonnerEvenementAction',));
        }

        // afficherEvenement
        if (preg_match('#^/(?P<reference>[^/]++)/afficherEvenement$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'afficherEvenement']), array (  '_controller' => 'ProjectBundle\\Controller\\EvenementController::afficherEvenementAction',));
        }

        // afficherReservations
        if ('/afficherReservations' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::afficherReservationAction',  '_route' => 'afficherReservations',);
        }

        // supprimerReservation
        if (preg_match('#^/(?P<ref>[^/]++)/supprimerReservation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimerReservation']), array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::supprimerReservationAction',));
        }

        // mesParticipation
        if ('/mesParticipation' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::affichermesparticipationAction',  '_route' => 'mesParticipation',);
        }

        // ajax_search
        if ('/search' === $pathinfo) {
            $ret = array (  '_controller' => 'ProjectBundle\\Controller\\EvenementController::searchAction',  '_route' => 'ajax_search',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_ajax_search;
            }

            return $ret;
        }
        not_ajax_search:

        // ajouterPub
        if ('/ajouterPub' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle:Publication:ajouterPublication',  '_route' => 'ajouterPub',);
        }

        // afficherPub
        if ('/afficherPub' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle:Publication:afficherPublications',  '_route' => 'afficherPub',);
        }

        // ajouterCommentaire
        if (preg_match('#^/(?P<id>[^/]++)/ajouterCommentaire$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajouterCommentaire']), array (  '_controller' => 'ProjectBundle:Commentaire:Commenter',));
        }

        // aimer
        if (preg_match('#^/(?P<reference>[^/]++)/aimer$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'aimer']), array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::AimerEvenementAction',));
        }

        // dislike
        if (preg_match('#^/(?P<reference>[^/]++)/dislike$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'dislike']), array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::dislikeAction',));
        }

        // ajouterReservation
        if ('/ajouterReservation' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::ajouterReservationAction',  '_route' => 'ajouterReservation',);
        }

        // modifierReservation
        if (preg_match('#^/(?P<ref>[^/]++)/modifierReservation$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifierReservation']), array (  '_controller' => 'ProjectBundle\\Controller\\ReservationController::modifierReservationAction',));
        }

        // project_homepageBack
        if ('/back' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::indexAction',  '_route' => 'project_homepageBack',);
        }

        // project_homepageFront
        if ('/front' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::indexFrontAction',  '_route' => 'project_homepageFront',);
        }

        // postulations_Failure
        if (0 === strpos($pathinfo, '/failure') && preg_match('#^/failure/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_Failure']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::failureAction',));
        }

        // project_Temp
        if ('/Temp' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::TempAction',  '_route' => 'project_Temp',);
        }

        if (0 === strpos($pathinfo, '/A')) {
            // project_AjouterRef
            if ('/AjouterRef' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::AjouterRefAction',  '_route' => 'project_AjouterRef',);
            }

            // project_AjouterLog
            if ('/AjouterLog' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\logRefController::AjouterLogAction',  '_route' => 'project_AjouterLog',);
            }

            if (0 === strpos($pathinfo, '/AfficherRef')) {
                // project_AfficherRef
                if ('/AfficherRef' === $pathinfo) {
                    return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::AfficherRefAction',  '_route' => 'project_AfficherRef',);
                }

                // project_AfficherRefBack
                if ('/AfficherRefBack' === $pathinfo) {
                    return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::AfficherRefBackAction',  '_route' => 'project_AfficherRefBack',);
                }

            }

            elseif (0 === strpos($pathinfo, '/AfficherLog')) {
                // project_AfficherLog
                if ('/AfficherLog' === $pathinfo) {
                    return array (  '_controller' => 'ProjectBundle\\Controller\\logRefController::AfficherLogAction',  '_route' => 'project_AfficherLog',);
                }

                // project_AfficherLogBack
                if ('/AfficherLogBack' === $pathinfo) {
                    return array (  '_controller' => 'ProjectBundle\\Controller\\logRefController::AfficherLogBackAction',  '_route' => 'project_AfficherLogBack',);
                }

            }

        }

        // project_ModifierRef
        if (0 === strpos($pathinfo, '/ModifierRef') && preg_match('#^/ModifierRef/(?P<idref>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_ModifierRef']), array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::ModifierRefAction',));
        }

        // project_ModifierLog
        if (0 === strpos($pathinfo, '/ModifierLog') && preg_match('#^/ModifierLog/(?P<idlog>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_ModifierLog']), array (  '_controller' => 'ProjectBundle\\Controller\\logRefController::ModifierLogAction',));
        }

        // project_SupprimerRef
        if (0 === strpos($pathinfo, '/SupprimerRef') && preg_match('#^/SupprimerRef/(?P<idref>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_SupprimerRef']), array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::SupprimerRefAction',));
        }

        // project_SupprimerLog
        if (0 === strpos($pathinfo, '/SupprimerLog') && preg_match('#^/SupprimerLog/(?P<idlog>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'project_SupprimerLog']), array (  '_controller' => 'ProjectBundle\\Controller\\logRefController::SupprimerLogAction',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            // project_payer
            if ('/payer' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\logRefController::payerAction',  '_route' => 'project_payer',);
            }

            if (0 === strpos($pathinfo, '/postulations')) {
                // postulations_index
                if ('/postulations' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::indexAction',  '_route' => 'postulations_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_postulations_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'postulations_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_postulations_index;
                    }

                    return $ret;
                }
                not_postulations_index:

                // postulations_show
                if (preg_match('#^/postulations/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_show']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_postulations_show;
                    }

                    return $ret;
                }
                not_postulations_show:

                // postulations_new
                if (preg_match('#^/postulations/(?P<id>[^/]++)/new/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_new']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::newAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_postulations_new;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'postulations_new'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_postulations_new;
                    }

                    return $ret;
                }
                not_postulations_new:

                // postulations_edit
                if (preg_match('#^/postulations/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_edit']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_postulations_edit;
                    }

                    return $ret;
                }
                not_postulations_edit:

                // postulations_delete
                if (preg_match('#^/postulations/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_delete']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_postulations_delete;
                    }

                    return $ret;
                }
                not_postulations_delete:

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/opportunity')) {
            // opportunity_index
            if ('/opportunity' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::indexAction',  '_route' => 'opportunity_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_opportunity_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'opportunity_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_opportunity_index;
                }

                return $ret;
            }
            not_opportunity_index:

            // opportunity_show
            if (preg_match('#^/opportunity/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'opportunity_show']), array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_opportunity_show;
                }

                return $ret;
            }
            not_opportunity_show:

            // opportunity_new
            if ('/opportunity/new' === $pathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::newAction',  '_route' => 'opportunity_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_opportunity_new;
                }

                return $ret;
            }
            not_opportunity_new:

            // opportunity_add
            if ('/opportunity/ajouterOp' === $pathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::ajouterOpAction',  '_route' => 'opportunity_add',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_opportunity_add;
                }

                return $ret;
            }
            not_opportunity_add:

            // opportunity_edit
            if (preg_match('#^/opportunity/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'opportunity_edit']), array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_opportunity_edit;
                }

                return $ret;
            }
            not_opportunity_edit:

            // opportunity_delete
            if (preg_match('#^/opportunity/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'opportunity_delete']), array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::deleteAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_opportunity_delete;
                }

                return $ret;
            }
            not_opportunity_delete:

            // ngo_Menu
            if ('/opportunity/ngoMenu' === $pathinfo) {
                $ret = array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::ngoMenuAction',  '_route' => 'ngo_Menu',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_ngo_Menu;
                }

                return $ret;
            }
            not_ngo_Menu:

        }

        // opportunity_search
        if ('/opSearch' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::opSearchAction',  '_route' => 'opportunity_search',);
        }

        // evenement_show
        if ('/evenement_show' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::showAction',  '_route' => 'evenement_show',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // ajaxxx_search
            if ('/searchh' === $pathinfo) {
                return array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::searchAction',  '_route' => 'ajaxxx_search',);
            }

            // opportunity_showVol
            if (0 === strpos($pathinfo, '/showVol') && preg_match('#^/showVol/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'opportunity_showVol']), array (  '_controller' => 'ProjectBundle\\Controller\\OpportunityController::sAction',));
            }

            // postulations_Success
            if (0 === strpos($pathinfo, '/success') && preg_match('#^/success/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_Success']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::successAction',));
            }

        }

        // vol_menu
        if ('/volMenu' === $pathinfo) {
            return array (  '_controller' => 'ProjectBundle\\Controller\\DefaultController::volMenuAction',  '_route' => 'vol_menu',);
        }

        // postulations_accept
        if (0 === strpos($pathinfo, '/accept') && preg_match('#^/accept/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_accept']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::acceptAction',));
        }

        // postulations_decline
        if (0 === strpos($pathinfo, '/decline') && preg_match('#^/decline/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'postulations_decline']), array (  '_controller' => 'ProjectBundle\\Controller\\PostulationsController::declineAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
