<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/actualite')) {
            // actualite_index
            if (rtrim($pathinfo, '/') === '/actualite') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actualite_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actualite_index');
                }

                return array (  '_controller' => 'NtiBundle\\Controller\\ActualiteController::indexAction',  '_route' => 'actualite_index',);
            }
            not_actualite_index:

            // actualite_new
            if ($pathinfo === '/actualite/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actualite_new;
                }

                return array (  '_controller' => 'NtiBundle\\Controller\\ActualiteController::newAction',  '_route' => 'actualite_new',);
            }
            not_actualite_new:

            // actualite_show
            if (preg_match('#^/actualite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actualite_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_show')), array (  '_controller' => 'NtiBundle\\Controller\\ActualiteController::showAction',));
            }
            not_actualite_show:

            // actualite_edit
            if (preg_match('#^/actualite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_actualite_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_edit')), array (  '_controller' => 'NtiBundle\\Controller\\ActualiteController::editAction',));
            }
            not_actualite_edit:

            // actualite_delete
            if (preg_match('#^/actualite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_actualite_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_delete')), array (  '_controller' => 'NtiBundle\\Controller\\ActualiteController::deleteAction',));
            }
            not_actualite_delete:

        }

        // nti_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nti_default_index');
            }

            return array (  '_controller' => 'NtiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'nti_default_index',);
        }

        if (0 === strpos($pathinfo, '/page')) {
            // page_index
            if (rtrim($pathinfo, '/') === '/page') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_page_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'page_index');
                }

                return array (  '_controller' => 'NtiBundle\\Controller\\PageController::indexAction',  '_route' => 'page_index',);
            }
            not_page_index:

            // page_new
            if ($pathinfo === '/page/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_page_new;
                }

                return array (  '_controller' => 'NtiBundle\\Controller\\PageController::newAction',  '_route' => 'page_new',);
            }
            not_page_new:

            // page_show
            if (preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_page_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_show')), array (  '_controller' => 'NtiBundle\\Controller\\PageController::showAction',));
            }
            not_page_show:

            // page_edit
            if (preg_match('#^/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_page_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_edit')), array (  '_controller' => 'NtiBundle\\Controller\\PageController::editAction',));
            }
            not_page_edit:

            // page_delete
            if (preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_page_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_delete')), array (  '_controller' => 'NtiBundle\\Controller\\PageController::deleteAction',));
            }
            not_page_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'NtiBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'NtiBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'NtiBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'NtiBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'NtiBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
