<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/in')) {
            if (0 === strpos($pathinfo, '/infos')) {
                // infos
                if ('/infos' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::infosAction',  '_route' => 'infos',);
                }

                // infos_jourj
                if ('/infos/jourj' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::jourjAction',  '_route' => 'infos_jourj',);
                }

                // infos_dossards
                if ('/infos/dossards' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::dossardsAction',  '_route' => 'infos_dossards',);
                }

                // infos_acces
                if ('/infos/acces' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::accesAction',  '_route' => 'infos_acces',);
                }

                // infos_reglement
                if ('/infos/reglement' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::reglementAction',  '_route' => 'infos_reglement',);
                }

                // infos_savoir
                if ('/infos/bon-a-savoir' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::savoirAction',  '_route' => 'infos_savoir',);
                }

                // infos_questions
                if ('/infos/questions' === $pathinfo) {
                    return array (  '_controller' => 'CrazyBundle\\Controller\\CourseController::questionsAction',  '_route' => 'infos_questions',);
                }

            }

            // inscription
            if ('/inscription' === $pathinfo) {
                return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::inscriptionAction',  '_route' => 'inscription',);
            }

            // inscrits
            if ('/inscrits' === $pathinfo) {
                return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::inscritsAction',  '_route' => 'inscrits',);
            }

        }

        elseif (0 === strpos($pathinfo, '/news')) {
            // dashboard
            if ('/news' === $pathinfo) {
                return array (  '_controller' => 'CrazyBundle\\Controller\\NewsController::dashboardAction',  '_route' => 'dashboard',);
            }

            // ajouter-actualite
            if ('/news/ajouter' === $pathinfo) {
                return array (  '_controller' => 'CrazyBundle\\Controller\\NewsController::ajouterAction',  '_route' => 'ajouter-actualite',);
            }

            // editer-actualite
            if (0 === strpos($pathinfo, '/news/editer') && preg_match('#^/news/editer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editer-actualite')), array (  '_controller' => 'CrazyBundle\\Controller\\NewsController::editerAction',));
            }

            // supprimer-actualite
            if (0 === strpos($pathinfo, '/news/supprimer') && preg_match('#^/news/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer-actualite')), array (  '_controller' => 'CrazyBundle\\Controller\\NewsController::supprimerAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/actualites')) {
            // actualites_post
            if (0 === strpos($pathinfo, '/actualites/post') && preg_match('#^/actualites/post/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualites_post')), array (  '_controller' => 'CrazyBundle\\Controller\\NewsController::postAction',));
            }

            // actualites
            if (preg_match('#^/actualites(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualites')), array (  'page' => 1,  '_controller' => 'CrazyBundle\\Controller\\NewsController::actualitesAction',));
            }

        }

        // home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::indexAction',  '_route' => 'home',);
        }

        // galeries
        if ('/galeries' === $pathinfo) {
            return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::galeriesAction',  '_route' => 'galeries',);
        }

        // contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::contactAction',  '_route' => 'contact',);
        }

        // mentions
        if ('/mentions-legales' === $pathinfo) {
            return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::mentionsAction',  '_route' => 'mentions',);
        }

        // benevoles
        if ('/benevoles' === $pathinfo) {
            return array (  '_controller' => 'CrazyBundle\\Controller\\PagesController::benevolesAction',  '_route' => 'benevoles',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // ef_connect
        if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',));
        }

        // elfinder
        if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
