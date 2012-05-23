<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_c06fa92
        if ($pathinfo === '/css/service.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c06fa92',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c06fa92',);
        }

        // _assetic_c06fa92_0
        if ($pathinfo === '/css/service_service_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c06fa92',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c06fa92_0',);
        }

        // _assetic_5f79317
        if ($pathinfo === '/css/admin.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '5f79317',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5f79317',);
        }

        // _assetic_5f79317_0
        if ($pathinfo === '/css/admin_admin_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '5f79317',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5f79317_0',);
        }

        // _assetic_ecb6178
        if ($pathinfo === '/global.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ecb6178',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ecb6178',);
        }

        // _assetic_ecb6178_0
        if ($pathinfo === '/global_slides.min.jquery_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ecb6178',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ecb6178_0',);
        }

        // _assetic_1e1f7b8
        if ($pathinfo === '/css/mercerie.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e1f7b8',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1e1f7b8',);
        }

        // _assetic_1e1f7b8_0
        if ($pathinfo === '/css/mercerie_index_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1e1f7b8',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1e1f7b8_0',);
        }

        // _assetic_c9f2e84
        if ($pathinfo === '/css/animation.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9f2e84',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c9f2e84',);
        }

        // _assetic_c9f2e84_0
        if ($pathinfo === '/css/animation_animation_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9f2e84',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c9f2e84_0',);
        }

        // _assetic_c9f2e84_1
        if ($pathinfo === '/css/animation_jquery.fancybox-1.3.4_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9f2e84',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c9f2e84_1',);
        }

        // _assetic_12fd145
        if ($pathinfo === '/js/animations.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '12fd145',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_12fd145',);
        }

        // _assetic_12fd145_0
        if ($pathinfo === '/js/animations_jquery.fancybox-1.3.4.pack_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '12fd145',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_12fd145_0',);
        }

        // _assetic_3b2f86f
        if ($pathinfo === '/css/animation.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3b2f86f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3b2f86f',);
        }

        // _assetic_3b2f86f_0
        if ($pathinfo === '/css/animation_animation_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3b2f86f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3b2f86f_0',);
        }

        // _assetic_78c7f0c
        if ($pathinfo === '/css/lacarte.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '78c7f0c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_78c7f0c',);
        }

        // _assetic_78c7f0c_0
        if ($pathinfo === '/css/lacarte_lacarte_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '78c7f0c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_78c7f0c_0',);
        }

        // _assetic_39728f9
        if ($pathinfo === '/js/lacarte.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '39728f9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_39728f9',);
        }

        // _assetic_39728f9_0
        if ($pathinfo === '/js/lacarte_lacarte_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '39728f9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_39728f9_0',);
        }

        // _assetic_5dda2a4
        if ($pathinfo === '/css/contact.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '5dda2a4',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5dda2a4',);
        }

        // _assetic_5dda2a4_0
        if ($pathinfo === '/css/contact_contact_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '5dda2a4',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5dda2a4_0',);
        }

        // _assetic_e51aafb
        if ($pathinfo === '/css/compressed.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e51aafb',);
        }

        // _assetic_e51aafb_0
        if ($pathinfo === '/css/compressed_global_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e51aafb_0',);
        }

        // _assetic_e51aafb_1
        if ($pathinfo === '/css/compressed_blocks_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e51aafb_1',);
        }

        // _assetic_e51aafb_2
        if ($pathinfo === '/css/compressed_effect_3.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_e51aafb_2',);
        }

        // _assetic_e51aafb_3
        if ($pathinfo === '/css/compressed_global_4.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_e51aafb_3',);
        }

        // _assetic_e51aafb_4
        if ($pathinfo === '/css/compressed_Slider_5.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_e51aafb_4',);
        }

        // _assetic_1ed6113
        if ($pathinfo === '/js/compressed.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1ed6113',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1ed6113',);
        }

        // _assetic_1ed6113_0
        if ($pathinfo === '/js/compressed_global_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1ed6113',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1ed6113_0',);
        }

        // _assetic_1ed6113_1
        if ($pathinfo === '/js/compressed_slides.min.jquery_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1ed6113',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_1ed6113_1',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // sitemap
        if ($pathinfo === '/sitemap.xml') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sitemap;
            }
            return array (  '_controller' => 'sitemap.controller:sitemap',  '_format' => 'xml',  '_route' => 'sitemap',);
        }
        not_sitemap:

        // siteindex
        if ($pathinfo === '/siteindex.xml') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_siteindex;
            }
            return array (  '_controller' => 'sitemap.controller:siteindex',  '_format' => 'xml',  '_route' => 'siteindex',);
        }
        not_siteindex:

        // SiteHomeBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'SiteHomeBundle_homepage');
            }
            return array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'SiteHomeBundle_homepage',);
        }

        // SiteHomeBundle_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::viewPageContactAction',  '_route' => 'SiteHomeBundle_contact',);
        }

        // SiteHomeBundle_lacarte
        if ($pathinfo === '/lacarte') {
            return array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::viewPageLacarteAction',  '_route' => 'SiteHomeBundle_lacarte',);
        }

        // SiteHomeBundle_animations
        if ($pathinfo === '/animations') {
            return array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::viewPageAnimationsAction',  '_route' => 'SiteHomeBundle_animations',);
        }

        // EyeswebcreaAliasContentViewerBundle_homepage
        if (0 === strpos($pathinfo, '/article/list') && preg_match('#^/article/list/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\AliasContent\\ViewerBundle\\Controller\\DefaultController::listArticleAction',)), array('_route' => 'EyeswebcreaAliasContentViewerBundle_homepage'));
        }

        // EyeswebcreaSecuserSpaceUserBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\SecuserSpace\\UserBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EyeswebcreaSecuserSpaceUserBundle_homepage'));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // EyeswebcreaSecuserSpaceAdminBundle_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'EyeswebcreaSecuserSpaceAdminBundle_homepage');
                }
                return array (  '_controller' => 'Eyeswebcrea\\SecuserSpace\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'EyeswebcreaSecuserSpaceAdminBundle_homepage',);
            }

            // EyeswebcreaSecuserSpaceAdminBundle_login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Eyeswebcrea\\SecuserSpace\\AdminBundle\\Controller\\DefaultController::loginAction',  '_route' => 'EyeswebcreaSecuserSpaceAdminBundle_login',);
            }

            // EyeswebcreaSecuserSpaceAdminBundle_logout
            if ($pathinfo === '/admin/logout') {
                return array('_route' => 'EyeswebcreaSecuserSpaceAdminBundle_logout');
            }

        }

        // EyeswebcreaAliasContentEditorBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EyeswebcreaAliasContentEditorBundle_homepage'));
        }

        // EyeswebcreaAliasContentEditorBundle_panel
        if ($pathinfo === '/panel') {
            return array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::panelAction',  '_route' => 'EyeswebcreaAliasContentEditorBundle_panel',);
        }

        // EyeswebcreaAliasContentEditorBundle_deleteArticle
        if (0 === strpos($pathinfo, '/delete/article') && preg_match('#^/delete/article/(?P<id_article>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::deleteArticleAction',)), array('_route' => 'EyeswebcreaAliasContentEditorBundle_deleteArticle'));
        }

        // EyeswebcreaAliasContentEditorBundle_editArticle
        if (0 === strpos($pathinfo, '/edit/article') && preg_match('#^/edit/article/(?P<id_article>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editArticleAction',)), array('_route' => 'EyeswebcreaAliasContentEditorBundle_editArticle'));
        }

        // EyeswebcreaAliasContentEditorBundle_addArticle
        if (rtrim($pathinfo, '/') === '/add/article') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'EyeswebcreaAliasContentEditorBundle_addArticle');
            }
            return array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editArticleAction',  'id_article' => NULL,  '_route' => 'EyeswebcreaAliasContentEditorBundle_addArticle',);
        }

        // EyeswebcreaAliasContentEditorBundle_editRubrique
        if (0 === strpos($pathinfo, '/edit/rubrique') && preg_match('#^/edit/rubrique/(?P<id_rubrique>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editRubriqueAction',)), array('_route' => 'EyeswebcreaAliasContentEditorBundle_editRubrique'));
        }

        // EyeswebcreaAliasContentEditorBundle_addRubrique
        if (rtrim($pathinfo, '/') === '/add/rubrique') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'EyeswebcreaAliasContentEditorBundle_addRubrique');
            }
            return array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editRubriqueAction',  'id_rubrique' => NULL,  '_route' => 'EyeswebcreaAliasContentEditorBundle_addRubrique',);
        }

        // EyeswebcreaAssetServiceBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\AssetServiceBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EyeswebcreaAssetServiceBundle_homepage'));
        }

        // EyeswebcreaReferencement_referencement
        if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\ReferencementBundle\\Controller\\DefaultController::viewPageReferencementAction',)), array('_route' => 'EyeswebcreaReferencement_referencement'));
        }

        // EyeswebcreaSliderBundle_homepage
        if (0 === strpos($pathinfo, '/slider/hello') && preg_match('#^/slider/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Eyeswebcrea\\SliderBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EyeswebcreaSliderBundle_homepage'));
        }

        if (0 === strpos($pathinfo, '/spip')) {
            // SpipAccesContentBundle_homepage
            if (0 === strpos($pathinfo, '/spip/hello') && preg_match('#^/spip/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Spip\\AccesContentBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'SpipAccesContentBundle_homepage'));
            }

            // SpipAccesContentBundle_setLangue
            if (0 === strpos($pathinfo, '/spip/setLangue') && preg_match('#^/spip/setLangue/(?P<langue>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Spip\\AccesContentBundle\\Controller\\DefaultController::setLangueAction',)), array('_route' => 'SpipAccesContentBundle_setLangue'));
            }

            // SpipAccesContentBundle_login
            if ($pathinfo === '/spip/login') {
                return array (  '_controller' => 'Spip\\AccesContentBundle\\Controller\\DefaultController::loginAction',  '_route' => 'SpipAccesContentBundle_login',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
