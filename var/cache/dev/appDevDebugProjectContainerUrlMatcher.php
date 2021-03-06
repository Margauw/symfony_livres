<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'OC\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_check',);
        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'OC\\UserBundle\\Controller\\SecurityController::admin',  '_route' => 'admin',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/genres')) {
                // admin_genre_liste
                if ($pathinfo === '/admin/genres/liste') {
                    return array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminGenreController::listAction',  '_route' => 'admin_genre_liste',);
                }

                // admin_genre_ajout
                if ($pathinfo === '/admin/genres/ajout') {
                    return array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminGenreController::addAction',  '_route' => 'admin_genre_ajout',);
                }

                // admin_genre_modif
                if (0 === strpos($pathinfo, '/admin/genres/modif') && preg_match('#^/admin/genres/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_genre_modif')), array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminGenreController::editAction',));
                }

                // admin_genre_supprimer
                if (0 === strpos($pathinfo, '/admin/genres/supprimer') && preg_match('#^/admin/genres/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_genre_supprimer')), array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminGenreController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/livres')) {
                // admin_livre_ajout
                if ($pathinfo === '/admin/livres/ajout') {
                    return array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminLivreController::addAction',  '_route' => 'admin_livre_ajout',);
                }

                // admin_livre_liste
                if ($pathinfo === '/admin/livres/liste') {
                    return array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminLivreController::listAction',  '_route' => 'admin_livre_liste',);
                }

                // admin_livre_modif
                if (0 === strpos($pathinfo, '/admin/livres/modif') && preg_match('#^/admin/livres/modif/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_livre_modif')), array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminLivreController::editAction',));
                }

                // admin_livre_supprimer
                if (0 === strpos($pathinfo, '/admin/livres/supprimer') && preg_match('#^/admin/livres/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_livre_supprimer')), array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\AdminLivreController::deleteAction',));
                }

            }

        }

        // devschool_admin_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'devschool_admin_default_index');
            }

            return array (  '_controller' => 'Devschool\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'devschool_admin_default_index',);
        }

        // devschool_biblio_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'devschool_biblio_default_index');
            }

            return array (  '_controller' => 'Devschool\\BiblioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'devschool_biblio_default_index',);
        }

        if (0 === strpos($pathinfo, '/livre')) {
            // page_livres
            if ($pathinfo === '/livres') {
                return array (  '_controller' => 'Devschool\\BiblioBundle\\Controller\\DefaultController::listAction',  '_route' => 'page_livres',);
            }

            // page_livre
            if (preg_match('#^/livre/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_livre')), array (  '_controller' => 'Devschool\\BiblioBundle\\Controller\\DefaultController::showAction',));
            }

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
