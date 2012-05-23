<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
