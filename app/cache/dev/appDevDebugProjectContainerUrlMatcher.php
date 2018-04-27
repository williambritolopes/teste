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

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/bootstrap_css')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/assetic/bootstrap_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_css_bootstrap')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/assetic/bootstrap_css_bootstrap-theme_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/assetic/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/assetic/jquery_jquery-3.2.1_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                }

            }

            if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/assetic/bootstrap_js.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                // _assetic_bootstrap_js_0
                if ($pathinfo === '/assetic/bootstrap_js_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_bootstrap_glyphicons_ttf
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf',);
            }

            // _assetic_bootstrap_glyphicons_ttf_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf_0',);
            }

            // _assetic_bootstrap_glyphicons_eot
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot',);
            }

            // _assetic_bootstrap_glyphicons_eot_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot_0',);
            }

            // _assetic_bootstrap_glyphicons_svg
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg',);
            }

            // _assetic_bootstrap_glyphicons_svg_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg_0',);
            }

            // _assetic_bootstrap_glyphicons_woff
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff',);
            }

            // _assetic_bootstrap_glyphicons_woff_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fddb9b6')) {
            // _assetic_fddb9b6
            if ($pathinfo === '/css/fddb9b6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
            }

            // _assetic_fddb9b6_0
            if ($pathinfo === '/css/fddb9b6_part_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/a56fa94')) {
            // _assetic_a56fa94
            if ($pathinfo === '/js/a56fa94.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a56fa94',);
            }

            if (0 === strpos($pathinfo, '/js/a56fa94_part_')) {
                // _assetic_a56fa94_0
                if ($pathinfo === '/js/a56fa94_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a56fa94_0',);
                }

                // _assetic_a56fa94_1
                if ($pathinfo === '/js/a56fa94_part_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a56fa94_1',);
                }

            }

        }

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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

        // einstein_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'einstein_default_index');
            }

            return array (  '_controller' => 'EinsteinBundle\\Controller\\DefaultController::indexAction',  '_route' => 'einstein_default_index',);
        }

        if (0 === strpos($pathinfo, '/co')) {
            if (0 === strpos($pathinfo, '/comment')) {
                // comment_index
                if (rtrim($pathinfo, '/') === '/comment') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comment_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comment_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment_index',);
                }
                not_comment_index:

                // comment_new
                if ($pathinfo === '/comment/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_comment_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
                }
                not_comment_new:

                // comment_show
                if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::showAction',));
                }
                not_comment_show:

                // comment_edit
                if (preg_match('#^/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_comment_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::editAction',));
                }
                not_comment_edit:

                // comment_delete
                if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentController::deleteAction',));
                }
                not_comment_delete:

            }

            if (0 === strpos($pathinfo, '/content')) {
                // content_index
                if (rtrim($pathinfo, '/') === '/content') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_content_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'content_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ContentController::indexAction',  '_route' => 'content_index',);
                }
                not_content_index:

                // content_new
                if ($pathinfo === '/content/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_content_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ContentController::newAction',  '_route' => 'content_new',);
                }
                not_content_new:

                // content_show
                if (preg_match('#^/content/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_content_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_show')), array (  '_controller' => 'AppBundle\\Controller\\ContentController::showAction',));
                }
                not_content_show:

                // content_edit
                if (preg_match('#^/content/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_content_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_edit')), array (  '_controller' => 'AppBundle\\Controller\\ContentController::editAction',));
                }
                not_content_edit:

                // content_delete
                if (preg_match('#^/content/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_content_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'content_delete')), array (  '_controller' => 'AppBundle\\Controller\\ContentController::deleteAction',));
                }
                not_content_delete:

            }

        }

        if (0 === strpos($pathinfo, '/favorite')) {
            // favorite_index
            if (rtrim($pathinfo, '/') === '/favorite') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_favorite_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'favorite_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FavoriteController::indexAction',  '_route' => 'favorite_index',);
            }
            not_favorite_index:

            // favorite_new
            if ($pathinfo === '/favorite/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_favorite_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FavoriteController::newAction',  '_route' => 'favorite_new',);
            }
            not_favorite_new:

            // favorite_show
            if (preg_match('#^/favorite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_favorite_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_show')), array (  '_controller' => 'AppBundle\\Controller\\FavoriteController::showAction',));
            }
            not_favorite_show:

            // favorite_edit
            if (preg_match('#^/favorite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_favorite_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_edit')), array (  '_controller' => 'AppBundle\\Controller\\FavoriteController::editAction',));
            }
            not_favorite_edit:

            // favorite_delete
            if (preg_match('#^/favorite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_favorite_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favorite_delete')), array (  '_controller' => 'AppBundle\\Controller\\FavoriteController::deleteAction',));
            }
            not_favorite_delete:

        }

        if (0 === strpos($pathinfo, '/gender')) {
            // gender_index
            if (rtrim($pathinfo, '/') === '/gender') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gender_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gender_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GenderController::indexAction',  '_route' => 'gender_index',);
            }
            not_gender_index:

            // gender_new
            if ($pathinfo === '/gender/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gender_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\GenderController::newAction',  '_route' => 'gender_new',);
            }
            not_gender_new:

            // gender_show
            if (preg_match('#^/gender/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_gender_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gender_show')), array (  '_controller' => 'AppBundle\\Controller\\GenderController::showAction',));
            }
            not_gender_show:

            // gender_edit
            if (preg_match('#^/gender/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gender_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gender_edit')), array (  '_controller' => 'AppBundle\\Controller\\GenderController::editAction',));
            }
            not_gender_edit:

            // gender_delete
            if (preg_match('#^/gender/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_gender_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gender_delete')), array (  '_controller' => 'AppBundle\\Controller\\GenderController::deleteAction',));
            }
            not_gender_delete:

        }

        if (0 === strpos($pathinfo, '/language')) {
            // language_index
            if (rtrim($pathinfo, '/') === '/language') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_language_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'language_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LanguageController::indexAction',  '_route' => 'language_index',);
            }
            not_language_index:

            // language_new
            if ($pathinfo === '/language/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_language_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LanguageController::newAction',  '_route' => 'language_new',);
            }
            not_language_new:

            // language_show
            if (preg_match('#^/language/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_language_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'language_show')), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::showAction',));
            }
            not_language_show:

            // language_edit
            if (preg_match('#^/language/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_language_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'language_edit')), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::editAction',));
            }
            not_language_edit:

            // language_delete
            if (preg_match('#^/language/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_language_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'language_delete')), array (  '_controller' => 'AppBundle\\Controller\\LanguageController::deleteAction',));
            }
            not_language_delete:

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/magazine')) {
                // magazine_index
                if (rtrim($pathinfo, '/') === '/magazine') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_magazine_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'magazine_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MagazineController::indexAction',  '_route' => 'magazine_index',);
                }
                not_magazine_index:

                // magazine_new
                if ($pathinfo === '/magazine/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magazine_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MagazineController::newAction',  '_route' => 'magazine_new',);
                }
                not_magazine_new:

                // magazine_show
                if (preg_match('#^/magazine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_magazine_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_show')), array (  '_controller' => 'AppBundle\\Controller\\MagazineController::showAction',));
                }
                not_magazine_show:

                // magazine_edit
                if (preg_match('#^/magazine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_magazine_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_edit')), array (  '_controller' => 'AppBundle\\Controller\\MagazineController::editAction',));
                }
                not_magazine_edit:

                // magazine_delete
                if (preg_match('#^/magazine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_magazine_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_delete')), array (  '_controller' => 'AppBundle\\Controller\\MagazineController::deleteAction',));
                }
                not_magazine_delete:

            }

            if (0 === strpos($pathinfo, '/message')) {
                // message_index
                if (rtrim($pathinfo, '/') === '/message') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_message_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'message_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MessageController::indexAction',  '_route' => 'message_index',);
                }
                not_message_index:

                // message_new
                if ($pathinfo === '/message/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_message_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MessageController::newAction',  '_route' => 'message_new',);
                }
                not_message_new:

                // message_show
                if (preg_match('#^/message/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_message_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::showAction',));
                }
                not_message_show:

                // message_edit
                if (preg_match('#^/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_message_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_edit')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::editAction',));
                }
                not_message_edit:

                // message_delete
                if (preg_match('#^/message/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_message_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::deleteAction',));
                }
                not_message_delete:

            }

        }

        if (0 === strpos($pathinfo, '/notification')) {
            // notification_index
            if (rtrim($pathinfo, '/') === '/notification') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notification_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NotificationController::indexAction',  '_route' => 'notification_index',);
            }
            not_notification_index:

            // notification_new
            if ($pathinfo === '/notification/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notification_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\NotificationController::newAction',  '_route' => 'notification_new',);
            }
            not_notification_new:

            // notification_show
            if (preg_match('#^/notification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_show')), array (  '_controller' => 'AppBundle\\Controller\\NotificationController::showAction',));
            }
            not_notification_show:

            // notification_edit
            if (preg_match('#^/notification/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_notification_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_edit')), array (  '_controller' => 'AppBundle\\Controller\\NotificationController::editAction',));
            }
            not_notification_edit:

            // notification_delete
            if (preg_match('#^/notification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_notification_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_delete')), array (  '_controller' => 'AppBundle\\Controller\\NotificationController::deleteAction',));
            }
            not_notification_delete:

        }

        if (0 === strpos($pathinfo, '/status')) {
            // status_index
            if (rtrim($pathinfo, '/') === '/status') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_status_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'status_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\StatusController::indexAction',  '_route' => 'status_index',);
            }
            not_status_index:

            // status_new
            if ($pathinfo === '/status/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_status_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\StatusController::newAction',  '_route' => 'status_new',);
            }
            not_status_new:

            // status_show
            if (preg_match('#^/status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_status_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_show')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::showAction',));
            }
            not_status_show:

            // status_edit
            if (preg_match('#^/status/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_status_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_edit')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::editAction',));
            }
            not_status_edit:

            // status_delete
            if (preg_match('#^/status/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_status_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'status_delete')), array (  '_controller' => 'AppBundle\\Controller\\StatusController::deleteAction',));
            }
            not_status_delete:

        }

        if (0 === strpos($pathinfo, '/type')) {
            // type_index
            if (rtrim($pathinfo, '/') === '/type') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_type_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'type_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TypeController::indexAction',  '_route' => 'type_index',);
            }
            not_type_index:

            // type_new
            if ($pathinfo === '/type/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_type_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TypeController::newAction',  '_route' => 'type_new',);
            }
            not_type_new:

            // type_show
            if (preg_match('#^/type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_type_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeController::showAction',));
            }
            not_type_show:

            // type_edit
            if (preg_match('#^/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_type_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeController::editAction',));
            }
            not_type_edit:

            // type_delete
            if (preg_match('#^/type/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_type_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeController::deleteAction',));
            }
            not_type_delete:

            if (0 === strpos($pathinfo, '/typeuser')) {
                // typeuser_index
                if (rtrim($pathinfo, '/') === '/typeuser') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typeuser_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typeuser_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeUserController::indexAction',  '_route' => 'typeuser_index',);
                }
                not_typeuser_index:

                // typeuser_new
                if ($pathinfo === '/typeuser/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typeuser_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeUserController::newAction',  '_route' => 'typeuser_new',);
                }
                not_typeuser_new:

                // typeuser_show
                if (preg_match('#^/typeuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typeuser_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeuser_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeUserController::showAction',));
                }
                not_typeuser_show:

                // typeuser_edit
                if (preg_match('#^/typeuser/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typeuser_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeuser_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeUserController::editAction',));
                }
                not_typeuser_edit:

                // typeuser_delete
                if (preg_match('#^/typeuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typeuser_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeuser_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeUserController::deleteAction',));
                }
                not_typeuser_delete:

            }

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

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/version')) {
            // version_index
            if (rtrim($pathinfo, '/') === '/version') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_version_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'version_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VersionController::indexAction',  '_route' => 'version_index',);
            }
            not_version_index:

            // version_new
            if ($pathinfo === '/version/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_version_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\VersionController::newAction',  '_route' => 'version_new',);
            }
            not_version_new:

            // version_show
            if (preg_match('#^/version/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_version_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'version_show')), array (  '_controller' => 'AppBundle\\Controller\\VersionController::showAction',));
            }
            not_version_show:

            // version_edit
            if (preg_match('#^/version/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_version_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'version_edit')), array (  '_controller' => 'AppBundle\\Controller\\VersionController::editAction',));
            }
            not_version_edit:

            // version_delete
            if (preg_match('#^/version/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_version_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'version_delete')), array (  '_controller' => 'AppBundle\\Controller\\VersionController::deleteAction',));
            }
            not_version_delete:

        }

        if (0 === strpos($pathinfo, '/einstein')) {
            if (0 === strpos($pathinfo, '/einstein/co')) {
                if (0 === strpos($pathinfo, '/einstein/comment')) {
                    // einstein_comment_index
                    if (rtrim($pathinfo, '/') === '/einstein/comment') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_comment_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'einstein_comment_index');
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\CommentController::indexAction',  '_route' => 'einstein_comment_index',);
                    }
                    not_einstein_comment_index:

                    // einstein_comment_show
                    if (preg_match('#^/einstein/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_comment_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_comment_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\CommentController::showAction',));
                    }
                    not_einstein_comment_show:

                    // einstein_comment_new
                    if ($pathinfo === '/einstein/comment/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_comment_new;
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\CommentController::newAction',  '_route' => 'einstein_comment_new',);
                    }
                    not_einstein_comment_new:

                    // einstein_comment_edit
                    if (preg_match('#^/einstein/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_comment_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_comment_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\CommentController::editAction',));
                    }
                    not_einstein_comment_edit:

                    // einstein_comment_delete
                    if (preg_match('#^/einstein/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_einstein_comment_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_comment_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\CommentController::deleteAction',));
                    }
                    not_einstein_comment_delete:

                }

                if (0 === strpos($pathinfo, '/einstein/content')) {
                    // einstein_content_index
                    if (rtrim($pathinfo, '/') === '/einstein/content') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_content_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'einstein_content_index');
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\ContentController::indexAction',  '_route' => 'einstein_content_index',);
                    }
                    not_einstein_content_index:

                    // einstein_content_show
                    if (preg_match('#^/einstein/content/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_content_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_content_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\ContentController::showAction',));
                    }
                    not_einstein_content_show:

                    // einstein_content_new
                    if ($pathinfo === '/einstein/content/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_content_new;
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\ContentController::newAction',  '_route' => 'einstein_content_new',);
                    }
                    not_einstein_content_new:

                    // einstein_content_edit
                    if (preg_match('#^/einstein/content/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_content_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_content_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\ContentController::editAction',));
                    }
                    not_einstein_content_edit:

                    // einstein_content_delete
                    if (preg_match('#^/einstein/content/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_einstein_content_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_content_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\ContentController::deleteAction',));
                    }
                    not_einstein_content_delete:

                }

            }

            if (0 === strpos($pathinfo, '/einstein/favorite')) {
                // einstein_favorite_index
                if (rtrim($pathinfo, '/') === '/einstein/favorite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_favorite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_favorite_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\FavoriteController::indexAction',  '_route' => 'einstein_favorite_index',);
                }
                not_einstein_favorite_index:

                // einstein_favorite_show
                if (preg_match('#^/einstein/favorite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_favorite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_favorite_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\FavoriteController::showAction',));
                }
                not_einstein_favorite_show:

                // einstein_favorite_new
                if ($pathinfo === '/einstein/favorite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_favorite_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\FavoriteController::newAction',  '_route' => 'einstein_favorite_new',);
                }
                not_einstein_favorite_new:

                // einstein_favorite_edit
                if (preg_match('#^/einstein/favorite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_favorite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_favorite_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\FavoriteController::editAction',));
                }
                not_einstein_favorite_edit:

                // einstein_favorite_delete
                if (preg_match('#^/einstein/favorite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_favorite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_favorite_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\FavoriteController::deleteAction',));
                }
                not_einstein_favorite_delete:

            }

            if (0 === strpos($pathinfo, '/einstein/gender')) {
                // einstein_gender_index
                if (rtrim($pathinfo, '/') === '/einstein/gender') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_gender_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_gender_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\GenderController::indexAction',  '_route' => 'einstein_gender_index',);
                }
                not_einstein_gender_index:

                // einstein_gender_show
                if (preg_match('#^/einstein/gender/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_gender_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_gender_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\GenderController::showAction',));
                }
                not_einstein_gender_show:

                // einstein_gender_new
                if ($pathinfo === '/einstein/gender/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_gender_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\GenderController::newAction',  '_route' => 'einstein_gender_new',);
                }
                not_einstein_gender_new:

                // einstein_gender_edit
                if (preg_match('#^/einstein/gender/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_gender_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_gender_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\GenderController::editAction',));
                }
                not_einstein_gender_edit:

                // einstein_gender_delete
                if (preg_match('#^/einstein/gender/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_gender_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_gender_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\GenderController::deleteAction',));
                }
                not_einstein_gender_delete:

            }

            if (0 === strpos($pathinfo, '/einstein/language')) {
                // einstein_language_index
                if (rtrim($pathinfo, '/') === '/einstein/language') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_language_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_language_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\LanguageController::indexAction',  '_route' => 'einstein_language_index',);
                }
                not_einstein_language_index:

                // einstein_language_show
                if (preg_match('#^/einstein/language/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_language_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_language_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\LanguageController::showAction',));
                }
                not_einstein_language_show:

                // einstein_language_new
                if ($pathinfo === '/einstein/language/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_language_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\LanguageController::newAction',  '_route' => 'einstein_language_new',);
                }
                not_einstein_language_new:

                // einstein_language_edit
                if (preg_match('#^/einstein/language/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_language_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_language_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\LanguageController::editAction',));
                }
                not_einstein_language_edit:

                // einstein_language_delete
                if (preg_match('#^/einstein/language/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_language_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_language_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\LanguageController::deleteAction',));
                }
                not_einstein_language_delete:

            }

            if (0 === strpos($pathinfo, '/einstein/m')) {
                if (0 === strpos($pathinfo, '/einstein/magazine')) {
                    // einstein_magazine_index
                    if (rtrim($pathinfo, '/') === '/einstein/magazine') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_magazine_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'einstein_magazine_index');
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\MagazineController::indexAction',  '_route' => 'einstein_magazine_index',);
                    }
                    not_einstein_magazine_index:

                    // einstein_magazine_show
                    if (preg_match('#^/einstein/magazine/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_magazine_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_magazine_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\MagazineController::showAction',));
                    }
                    not_einstein_magazine_show:

                    // einstein_magazine_new
                    if ($pathinfo === '/einstein/magazine/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_magazine_new;
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\MagazineController::newAction',  '_route' => 'einstein_magazine_new',);
                    }
                    not_einstein_magazine_new:

                    // einstein_magazine_edit
                    if (preg_match('#^/einstein/magazine/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_magazine_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_magazine_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\MagazineController::editAction',));
                    }
                    not_einstein_magazine_edit:

                    // einstein_magazine_delete
                    if (preg_match('#^/einstein/magazine/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_einstein_magazine_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_magazine_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\MagazineController::deleteAction',));
                    }
                    not_einstein_magazine_delete:

                }

                if (0 === strpos($pathinfo, '/einstein/message')) {
                    // einstein_message_index
                    if (rtrim($pathinfo, '/') === '/einstein/message') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_message_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'einstein_message_index');
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\MessageController::indexAction',  '_route' => 'einstein_message_index',);
                    }
                    not_einstein_message_index:

                    // einstein_message_show
                    if (preg_match('#^/einstein/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_message_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_message_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\MessageController::showAction',));
                    }
                    not_einstein_message_show:

                    // einstein_message_new
                    if ($pathinfo === '/einstein/message/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_message_new;
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\MessageController::newAction',  '_route' => 'einstein_message_new',);
                    }
                    not_einstein_message_new:

                    // einstein_message_edit
                    if (preg_match('#^/einstein/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_message_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_message_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\MessageController::editAction',));
                    }
                    not_einstein_message_edit:

                    // einstein_message_delete
                    if (preg_match('#^/einstein/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_einstein_message_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_message_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\MessageController::deleteAction',));
                    }
                    not_einstein_message_delete:

                }

            }

            if (0 === strpos($pathinfo, '/einstein/notification')) {
                // einstein_notification_index
                if (rtrim($pathinfo, '/') === '/einstein/notification') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_notification_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_notification_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\NotificationController::indexAction',  '_route' => 'einstein_notification_index',);
                }
                not_einstein_notification_index:

                // einstein_notification_show
                if (preg_match('#^/einstein/notification/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_notification_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_notification_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\NotificationController::showAction',));
                }
                not_einstein_notification_show:

                // einstein_notification_new
                if ($pathinfo === '/einstein/notification/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_notification_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\NotificationController::newAction',  '_route' => 'einstein_notification_new',);
                }
                not_einstein_notification_new:

                // einstein_notification_edit
                if (preg_match('#^/einstein/notification/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_notification_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_notification_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\NotificationController::editAction',));
                }
                not_einstein_notification_edit:

                // einstein_notification_delete
                if (preg_match('#^/einstein/notification/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_notification_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_notification_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\NotificationController::deleteAction',));
                }
                not_einstein_notification_delete:

            }

            if (0 === strpos($pathinfo, '/einstein/status')) {
                // einstein_status_index
                if (rtrim($pathinfo, '/') === '/einstein/status') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_status_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_status_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\StatusController::indexAction',  '_route' => 'einstein_status_index',);
                }
                not_einstein_status_index:

                // einstein_status_show
                if (preg_match('#^/einstein/status/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_status_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_status_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\StatusController::showAction',));
                }
                not_einstein_status_show:

                // einstein_status_new
                if ($pathinfo === '/einstein/status/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_status_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\StatusController::newAction',  '_route' => 'einstein_status_new',);
                }
                not_einstein_status_new:

                // einstein_status_edit
                if (preg_match('#^/einstein/status/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_status_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_status_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\StatusController::editAction',));
                }
                not_einstein_status_edit:

                // einstein_status_delete
                if (preg_match('#^/einstein/status/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_status_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_status_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\StatusController::deleteAction',));
                }
                not_einstein_status_delete:

            }

            if (0 === strpos($pathinfo, '/einstein/type')) {
                // einstein_type_index
                if (rtrim($pathinfo, '/') === '/einstein/type') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_type_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_type_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\TypeController::indexAction',  '_route' => 'einstein_type_index',);
                }
                not_einstein_type_index:

                // einstein_type_show
                if (preg_match('#^/einstein/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_type_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_type_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\TypeController::showAction',));
                }
                not_einstein_type_show:

                // einstein_type_new
                if ($pathinfo === '/einstein/type/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_type_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\TypeController::newAction',  '_route' => 'einstein_type_new',);
                }
                not_einstein_type_new:

                // einstein_type_edit
                if (preg_match('#^/einstein/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_type_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_type_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\TypeController::editAction',));
                }
                not_einstein_type_edit:

                // einstein_type_delete
                if (preg_match('#^/einstein/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_type_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_type_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\TypeController::deleteAction',));
                }
                not_einstein_type_delete:

                if (0 === strpos($pathinfo, '/einstein/typeuser')) {
                    // einstein_typeuser_index
                    if (rtrim($pathinfo, '/') === '/einstein/typeuser') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_typeuser_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'einstein_typeuser_index');
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\TypeUserController::indexAction',  '_route' => 'einstein_typeuser_index',);
                    }
                    not_einstein_typeuser_index:

                    // einstein_typeuser_show
                    if (preg_match('#^/einstein/typeuser/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_einstein_typeuser_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_typeuser_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\TypeUserController::showAction',));
                    }
                    not_einstein_typeuser_show:

                    // einstein_typeuser_new
                    if ($pathinfo === '/einstein/typeuser/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_typeuser_new;
                        }

                        return array (  '_controller' => 'EinsteinBundle\\Controller\\TypeUserController::newAction',  '_route' => 'einstein_typeuser_new',);
                    }
                    not_einstein_typeuser_new:

                    // einstein_typeuser_edit
                    if (preg_match('#^/einstein/typeuser/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_einstein_typeuser_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_typeuser_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\TypeUserController::editAction',));
                    }
                    not_einstein_typeuser_edit:

                    // einstein_typeuser_delete
                    if (preg_match('#^/einstein/typeuser/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_einstein_typeuser_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_typeuser_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\TypeUserController::deleteAction',));
                    }
                    not_einstein_typeuser_delete:

                }

            }

            if (0 === strpos($pathinfo, '/einstein/user')) {
                // einstein_user_index
                if (rtrim($pathinfo, '/') === '/einstein/user') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_user_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\UserController::indexAction',  '_route' => 'einstein_user_index',);
                }
                not_einstein_user_index:

                // einstein_user_show
                if (preg_match('#^/einstein/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_user_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_user_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\UserController::showAction',));
                }
                not_einstein_user_show:

                // einstein_user_new
                if ($pathinfo === '/einstein/user/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_user_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\UserController::newAction',  '_route' => 'einstein_user_new',);
                }
                not_einstein_user_new:

                // einstein_user_edit
                if (preg_match('#^/einstein/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_user_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\UserController::editAction',));
                }
                not_einstein_user_edit:

                // einstein_user_delete
                if (preg_match('#^/einstein/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_user_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\UserController::deleteAction',));
                }
                not_einstein_user_delete:

            }

            if (0 === strpos($pathinfo, '/einstein/version')) {
                // einstein_version_index
                if (rtrim($pathinfo, '/') === '/einstein/version') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_version_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'einstein_version_index');
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\VersionController::indexAction',  '_route' => 'einstein_version_index',);
                }
                not_einstein_version_index:

                // einstein_version_show
                if (preg_match('#^/einstein/version/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_einstein_version_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_version_show')), array (  '_controller' => 'EinsteinBundle\\Controller\\VersionController::showAction',));
                }
                not_einstein_version_show:

                // einstein_version_new
                if ($pathinfo === '/einstein/version/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_version_new;
                    }

                    return array (  '_controller' => 'EinsteinBundle\\Controller\\VersionController::newAction',  '_route' => 'einstein_version_new',);
                }
                not_einstein_version_new:

                // einstein_version_edit
                if (preg_match('#^/einstein/version/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_einstein_version_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_version_edit')), array (  '_controller' => 'EinsteinBundle\\Controller\\VersionController::editAction',));
                }
                not_einstein_version_edit:

                // einstein_version_delete
                if (preg_match('#^/einstein/version/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_einstein_version_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'einstein_version_delete')), array (  '_controller' => 'EinsteinBundle\\Controller\\VersionController::deleteAction',));
                }
                not_einstein_version_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
