<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_c06fa92' => true,
       '_assetic_c06fa92_0' => true,
       '_assetic_5f79317' => true,
       '_assetic_5f79317_0' => true,
       '_assetic_ecb6178' => true,
       '_assetic_ecb6178_0' => true,
       '_assetic_1e1f7b8' => true,
       '_assetic_1e1f7b8_0' => true,
       '_assetic_c9f2e84' => true,
       '_assetic_c9f2e84_0' => true,
       '_assetic_c9f2e84_1' => true,
       '_assetic_12fd145' => true,
       '_assetic_12fd145_0' => true,
       '_assetic_3b2f86f' => true,
       '_assetic_3b2f86f_0' => true,
       '_assetic_78c7f0c' => true,
       '_assetic_78c7f0c_0' => true,
       '_assetic_39728f9' => true,
       '_assetic_39728f9_0' => true,
       '_assetic_5dda2a4' => true,
       '_assetic_5dda2a4_0' => true,
       '_assetic_e51aafb' => true,
       '_assetic_e51aafb_0' => true,
       '_assetic_e51aafb_1' => true,
       '_assetic_e51aafb_2' => true,
       '_assetic_e51aafb_3' => true,
       '_assetic_e51aafb_4' => true,
       '_assetic_1ed6113' => true,
       '_assetic_1ed6113_0' => true,
       '_assetic_1ed6113_1' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'sitemap' => true,
       'siteindex' => true,
       'SiteHomeBundle_homepage' => true,
       'SiteHomeBundle_contact' => true,
       'SiteHomeBundle_lacarte' => true,
       'SiteHomeBundle_animations' => true,
       'EyeswebcreaAliasContentViewerBundle_homepage' => true,
       'EyeswebcreaSecuserSpaceUserBundle_homepage' => true,
       'EyeswebcreaSecuserSpaceAdminBundle_homepage' => true,
       'EyeswebcreaSecuserSpaceAdminBundle_login' => true,
       'EyeswebcreaSecuserSpaceAdminBundle_logout' => true,
       'EyeswebcreaAliasContentEditorBundle_homepage' => true,
       'EyeswebcreaAliasContentEditorBundle_panel' => true,
       'EyeswebcreaAliasContentEditorBundle_deleteArticle' => true,
       'EyeswebcreaAliasContentEditorBundle_editArticle' => true,
       'EyeswebcreaAliasContentEditorBundle_addArticle' => true,
       'EyeswebcreaAliasContentEditorBundle_editRubrique' => true,
       'EyeswebcreaAliasContentEditorBundle_addRubrique' => true,
       'EyeswebcreaAssetServiceBundle_homepage' => true,
       'EyeswebcreaReferencement_referencement' => true,
       'EyeswebcreaSliderBundle_homepage' => true,
       'SpipAccesContentBundle_homepage' => true,
       'SpipAccesContentBundle_setLangue' => true,
       'SpipAccesContentBundle_login' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_c06fa92RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'c06fa92',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/service.css',  ),));
    }

    private function get_assetic_c06fa92_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'c06fa92',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/service_service_1.css',  ),));
    }

    private function get_assetic_5f79317RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '5f79317',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/admin.css',  ),));
    }

    private function get_assetic_5f79317_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '5f79317',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/admin_admin_1.css',  ),));
    }

    private function get_assetic_ecb6178RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'ecb6178',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/global.js',  ),));
    }

    private function get_assetic_ecb6178_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'ecb6178',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/global_slides.min.jquery_1.js',  ),));
    }

    private function get_assetic_1e1f7b8RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1e1f7b8',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/mercerie.css',  ),));
    }

    private function get_assetic_1e1f7b8_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1e1f7b8',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/mercerie_index_1.css',  ),));
    }

    private function get_assetic_c9f2e84RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'c9f2e84',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/animation.css',  ),));
    }

    private function get_assetic_c9f2e84_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'c9f2e84',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/animation_animation_1.css',  ),));
    }

    private function get_assetic_c9f2e84_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'c9f2e84',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/animation_jquery.fancybox-1.3.4_2.css',  ),));
    }

    private function get_assetic_12fd145RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '12fd145',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/animations.js',  ),));
    }

    private function get_assetic_12fd145_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '12fd145',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/animations_jquery.fancybox-1.3.4.pack_1.js',  ),));
    }

    private function get_assetic_3b2f86fRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3b2f86f',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/animation.css',  ),));
    }

    private function get_assetic_3b2f86f_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3b2f86f',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/animation_animation_1.css',  ),));
    }

    private function get_assetic_78c7f0cRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '78c7f0c',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/lacarte.css',  ),));
    }

    private function get_assetic_78c7f0c_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '78c7f0c',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/lacarte_lacarte_1.css',  ),));
    }

    private function get_assetic_39728f9RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '39728f9',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/lacarte.js',  ),));
    }

    private function get_assetic_39728f9_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '39728f9',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/lacarte_lacarte_1.js',  ),));
    }

    private function get_assetic_5dda2a4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '5dda2a4',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/contact.css',  ),));
    }

    private function get_assetic_5dda2a4_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '5dda2a4',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/contact_contact_1.css',  ),));
    }

    private function get_assetic_e51aafbRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compressed.css',  ),));
    }

    private function get_assetic_e51aafb_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compressed_global_1.css',  ),));
    }

    private function get_assetic_e51aafb_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compressed_blocks_2.css',  ),));
    }

    private function get_assetic_e51aafb_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 2,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compressed_effect_3.css',  ),));
    }

    private function get_assetic_e51aafb_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 3,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compressed_global_4.css',  ),));
    }

    private function get_assetic_e51aafb_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'e51aafb',  'pos' => 4,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/compressed_Slider_5.css',  ),));
    }

    private function get_assetic_1ed6113RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1ed6113',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compressed.js',  ),));
    }

    private function get_assetic_1ed6113_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1ed6113',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compressed_global_1.js',  ),));
    }

    private function get_assetic_1ed6113_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1ed6113',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/compressed_slides.min.jquery_2.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getsitemapRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sitemap.controller:sitemap',  '_format' => 'xml',), array (  '_method' => 'GET',  '_format' => 'xml',), array (  0 =>   array (    0 => 'text',    1 => '/sitemap.xml',  ),));
    }

    private function getsiteindexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sitemap.controller:siteindex',  '_format' => 'xml',), array (  '_method' => 'GET',  '_format' => 'xml',), array (  0 =>   array (    0 => 'text',    1 => '/siteindex.xml',  ),));
    }

    private function getSiteHomeBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getSiteHomeBundle_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::viewPageContactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getSiteHomeBundle_lacarteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::viewPageLacarteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/lacarte',  ),));
    }

    private function getSiteHomeBundle_animationsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Site\\HomeBundle\\Controller\\DefaultController::viewPageAnimationsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/animations',  ),));
    }

    private function getEyeswebcreaAliasContentViewerBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\ViewerBundle\\Controller\\DefaultController::listArticleAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/article/list',  ),));
    }

    private function getEyeswebcreaSecuserSpaceUserBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Eyeswebcrea\\SecuserSpace\\UserBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getEyeswebcreaSecuserSpaceAdminBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Eyeswebcrea\\SecuserSpace\\AdminBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),));
    }

    private function getEyeswebcreaSecuserSpaceAdminBundle_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Eyeswebcrea\\SecuserSpace\\AdminBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/login',  ),));
    }

    private function getEyeswebcreaSecuserSpaceAdminBundle_logoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/logout',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_panelRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::panelAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/panel',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_deleteArticleRouteInfo()
    {
        return array(array (  0 => 'id_article',), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::deleteArticleAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id_article',  ),  1 =>   array (    0 => 'text',    1 => '/delete/article',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_editArticleRouteInfo()
    {
        return array(array (  0 => 'id_article',), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editArticleAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id_article',  ),  1 =>   array (    0 => 'text',    1 => '/edit/article',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_addArticleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editArticleAction',  'id_article' => NULL,), array (), array (  0 =>   array (    0 => 'text',    1 => '/add/article/',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_editRubriqueRouteInfo()
    {
        return array(array (  0 => 'id_rubrique',), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editRubriqueAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id_rubrique',  ),  1 =>   array (    0 => 'text',    1 => '/edit/rubrique',  ),));
    }

    private function getEyeswebcreaAliasContentEditorBundle_addRubriqueRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\Controller\\DefaultController::editRubriqueAction',  'id_rubrique' => NULL,), array (), array (  0 =>   array (    0 => 'text',    1 => '/add/rubrique/',  ),));
    }

    private function getEyeswebcreaAssetServiceBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Eyeswebcrea\\AssetServiceBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getEyeswebcreaReferencement_referencementRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Eyeswebcrea\\ReferencementBundle\\Controller\\DefaultController::viewPageReferencementAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/details',  ),));
    }

    private function getEyeswebcreaSliderBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Eyeswebcrea\\SliderBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/slider/hello',  ),));
    }

    private function getSpipAccesContentBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Spip\\AccesContentBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/spip/hello',  ),));
    }

    private function getSpipAccesContentBundle_setLangueRouteInfo()
    {
        return array(array (  0 => 'langue',), array (  '_controller' => 'Spip\\AccesContentBundle\\Controller\\DefaultController::setLangueAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'langue',  ),  1 =>   array (    0 => 'text',    1 => '/spip/setLangue',  ),));
    }

    private function getSpipAccesContentBundle_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Spip\\AccesContentBundle\\Controller\\DefaultController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/spip/login',  ),));
    }
}
