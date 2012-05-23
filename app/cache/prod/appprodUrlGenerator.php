<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'sitemap' => true,
       'siteindex' => true,
       'SiteHomeBundle_homepage' => true,
       'SiteHomeBundle_contact' => true,
       'SiteHomeBundle_lacarte' => true,
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
