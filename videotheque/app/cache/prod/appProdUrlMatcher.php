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

        if (0 === strpos($pathinfo, '/log')) {
            // _security_login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => '_security_login_check');
            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

        }

        // _index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_index');
            }

            return array (  'label' => '',  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\DefaultController::indexAction',  '_route' => '_index',);
        }

        // _filter_by_genre
        if (0 === strpos($pathinfo, '/filter-by-genre') && preg_match('#^/filter\\-by\\-genre(?:/(?P<label>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_filter_by_genre')), array (  'label' => '',  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\DefaultController::indexAction',));
        }

        // _security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\SecurityController::loginAction',  '_route' => '_security_login',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // iabsis_videotheque_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\AdminController::indexAction',  '_route' => 'iabsis_videotheque_admin',);
            }

            if (0 === strpos($pathinfo, '/admin/genre')) {
                // genre
                if (rtrim($pathinfo, '/') === '/admin/genre') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_genre;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'genre');
                    }

                    return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::indexAction',  '_route' => 'genre',);
                }
                not_genre:

                // genre_create
                if ($pathinfo === '/admin/genre/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_genre_create;
                    }

                    return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::createAction',  '_route' => 'genre_create',);
                }
                not_genre_create:

                // genre_new
                if ($pathinfo === '/admin/genre/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_genre_new;
                    }

                    return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::newAction',  '_route' => 'genre_new',);
                }
                not_genre_new:

                // genre_show
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_genre_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_show')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::showAction',));
                }
                not_genre_show:

                // genre_edit
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_genre_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_edit')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::editAction',));
                }
                not_genre_edit:

                // genre_update
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_genre_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_update')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::updateAction',));
                }
                not_genre_update:

                // genre_delete
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_genre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_delete')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\GenreController::deleteAction',));
                }
                not_genre_delete:

            }

            if (0 === strpos($pathinfo, '/admin/film')) {
                // film
                if (rtrim($pathinfo, '/') === '/admin/film') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_film;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'film');
                    }

                    return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::indexAction',  '_route' => 'film',);
                }
                not_film:

                // film_create
                if ($pathinfo === '/admin/film/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_film_create;
                    }

                    return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::createAction',  '_route' => 'film_create',);
                }
                not_film_create:

                // film_new
                if ($pathinfo === '/admin/film/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_film_new;
                    }

                    return array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::newAction',  '_route' => 'film_new',);
                }
                not_film_new:

                // film_show
                if (preg_match('#^/admin/film/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_film_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_show')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::showAction',));
                }
                not_film_show:

                // film_edit
                if (preg_match('#^/admin/film/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_film_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_edit')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::editAction',));
                }
                not_film_edit:

                // film_update
                if (preg_match('#^/admin/film/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_film_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_update')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::updateAction',));
                }
                not_film_update:

                // film_delete
                if (preg_match('#^/admin/film/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_film_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_delete')), array (  '_controller' => 'Iabsis\\VideothequeBundle\\Controller\\FilmController::deleteAction',));
                }
                not_film_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
