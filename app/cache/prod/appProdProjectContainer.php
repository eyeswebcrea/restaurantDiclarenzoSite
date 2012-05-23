<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $a = $this->get('templating.loader');
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/FrameworkBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/SecurityBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/TwigBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/MonologBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/MonologBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/SwiftmailerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/SwiftmailerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/DoctrineBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/DoctrineBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/AsseticBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', '/var/www/sites_symfony/vendor/bundles/Symfony/Bundle/AsseticBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/SensioFrameworkExtraBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', '/var/www/sites_symfony/vendor/bundles/Sensio/Bundle/FrameworkExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/JMSSecurityExtraBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'JMSSecurityExtraBundle', '/var/www/sites_symfony/vendor/bundles/JMS/SecurityExtraBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaReferencementBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaReferencementBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaReferencementBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/ReferencementBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaAssetServiceBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaAssetServiceBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaAssetServiceBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/AssetServiceBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaAliasContentViewerBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaAliasContentViewerBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaAliasContentViewerBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/AliasContent/ViewerBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaAliasContentEditorBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaAliasContentEditorBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaAliasContentEditorBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/AliasContent/EditorBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaSecuserSpaceAdminBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaSecuserSpaceAdminBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaSecuserSpaceAdminBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/SecuserSpace/AdminBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaSecuserSpaceUserBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaSecuserSpaceUserBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaSecuserSpaceUserBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/SecuserSpace/UserBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaSliderBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/EyeswebcreaSliderBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'EyeswebcreaSliderBundle', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/SliderBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SpipAccesContentBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/SpipAccesContentBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SpipAccesContentBundle', '/var/www/sites_symfony/vendor/bundles/Spip/AccesContentBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GregwarImageBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/GregwarImageBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GregwarImageBundle', '/var/www/sites_symfony/vendor/bundles/Gregwar/ImageBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IHQSContactBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/IHQSContactBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IHQSContactBundle', '/var/www/sites_symfony/vendor/bundles/IHQS/ContactBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IvoryGoogleMapBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/IvoryGoogleMapBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'IvoryGoogleMapBundle', '/var/www/sites_symfony/vendor/bundles/Ivory/GoogleMapBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GoogleBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/GoogleBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GoogleBundle', '/var/www/sites_symfony/vendor/bundles/AntiMattr/GoogleBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/DoctrineFixturesBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineFixturesBundle', '/var/www/sites_symfony/vendor/bundles/Symfony/Bundle/DoctrineFixturesBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMongoDBBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/DoctrineMongoDBBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineMongoDBBundle', '/var/www/sites_symfony/vendor/bundles/Symfony/Bundle/DoctrineMongoDBBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AvalancheSitemapBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/AvalancheSitemapBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AvalancheSitemapBundle', '/var/www/sites_symfony/vendor/bundles/Avalanche/Bundle/SitemapBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/KnpMenuBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'KnpMenuBundle', '/var/www/sites_symfony/vendor/bundles/Knp/Bundle/MenuBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SiteHomeBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/SiteHomeBundle/views', '/^[^.]+\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SiteHomeBundle', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/src/Site/HomeBundle/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources/views', '/^[^.]+\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.name_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetWriterCacheWarmer($this, new \Assetic\AssetWriter('/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/../web')), 6 => new \Symfony\Bundle\DoctrineMongoDBBundle\CacheWarmer\ProxyCacheWarmer($this), 7 => new \Symfony\Bundle\DoctrineMongoDBBundle\CacheWarmer\HydratorCacheWarmer($this)));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Symfony\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Symfony\Bundle\DoctrineBundle\ConnectionFactory(array());
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'default.sqlite', 'host' => 'localhost', 'port' => '', 'user' => 'john', 'password' => '147258', 'driver' => 'pdo_sqlite', 'path' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/../spip/config/bases/default.sqlite', 'charset' => 'UTF8', 'logging' => false, 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), new \Doctrine\Common\EventManager(), array());
    }
    protected function getDoctrine_Odm_Mongodb_Cache_ArrayService()
    {
        return $this->services['doctrine.odm.mongodb.cache.array'] = new \Doctrine\Common\Cache\ArrayCache();
    }
    protected function getDoctrine_Odm_Mongodb_DefaultConfigurationService()
    {
        $a = new \Symfony\Bundle\DoctrineMongoDBBundle\Mapping\Driver\YamlDriver(array(0 => '/var/www/sites_symfony/vendor/bundles/Avalanche/Bundle/SitemapBundle/Resources/config/doctrine'));
        $a->setNamespacePrefixes(array('/var/www/sites_symfony/vendor/bundles/Avalanche/Bundle/SitemapBundle/Resources/config/doctrine' => 'Avalanche\\Bundle\\SitemapBundle\\Sitemap'));
        $a->setGlobalBasename('mapping');
        $b = new \Doctrine\ODM\MongoDB\Mapping\Driver\DriverChain();
        $b->addDriver($a, 'Avalanche\\Bundle\\SitemapBundle\\Sitemap');
        $this->services['doctrine.odm.mongodb.default_configuration'] = $instance = new \Doctrine\ODM\MongoDB\Configuration();
        $instance->setDocumentNamespaces(array('AvalancheSitemapBundle' => 'Avalanche\\Bundle\\SitemapBundle\\Sitemap'));
        $instance->setMetadataCacheImpl($this->get('doctrine.odm.mongodb.default_metadata_cache'));
        $instance->setMetadataDriverImpl($b);
        $instance->setProxyDir('/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/doctrine/odm/mongodb/Proxies');
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(false);
        $instance->setHydratorDir('/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/doctrine/odm/mongodb/Hydrators');
        $instance->setHydratorNamespace('Hydrators');
        $instance->setAutoGenerateHydratorClasses(false);
        $instance->setDefaultDB('test_database');
        return $instance;
    }
    protected function getDoctrine_Odm_Mongodb_DefaultConnectionService()
    {
        return $this->services['doctrine.odm.mongodb.default_connection'] = new \Doctrine\MongoDB\Connection('mongodb://localhost:27017', array('connect' => true), $this->get('doctrine.odm.mongodb.default_configuration'));
    }
    protected function getDoctrine_Odm_Mongodb_DefaultDocumentManagerService()
    {
        return $this->services['doctrine.odm.mongodb.default_document_manager'] = call_user_func(array('Doctrine\\ODM\\MongoDB\\DocumentManager', 'create'), $this->get('doctrine.odm.mongodb.default_connection'), $this->get('doctrine.odm.mongodb.default_configuration'), $this->get('doctrine.odm.mongodb.event_manager'));
    }
    protected function getDoctrine_Odm_Mongodb_DefaultMetadataCacheService()
    {
        return $this->services['doctrine.odm.mongodb.default_metadata_cache'] = new \Doctrine\Common\Cache\ArrayCache();
    }
    protected function getDoctrine_Odm_Mongodb_EventManagerService()
    {
        $this->services['doctrine.odm.mongodb.event_manager'] = $instance = new \Doctrine\Common\EventManager();
        $instance->addEventListener(array(0 => 'loadClassMetadata'), $this->get('sitemap.url.mapper'));
        return $instance;
    }
    protected function getDoctrine_Odm_Mongodb_LoggerService()
    {
        return $this->services['doctrine.odm.mongodb.logger'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Logger\DoctrineMongoDBLogger($this->get('monolog.logger.doctrine'));
    }
    protected function getDoctrine_Odm_Mongodb_Metadata_AnnotationService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.annotation'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver($this->get('annotation_reader'), array());
    }
    protected function getDoctrine_Odm_Mongodb_Metadata_ChainService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.chain'] = new \Doctrine\ODM\MongoDB\Mapping\Driver\DriverChain();
    }
    protected function getDoctrine_Odm_Mongodb_Metadata_XmlService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.xml'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Mapping\Driver\XmlDriver(array());
    }
    protected function getDoctrine_Odm_Mongodb_Metadata_YmlService()
    {
        return $this->services['doctrine.odm.mongodb.metadata.yml'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Mapping\Driver\YamlDriver(array());
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_4d7efc4c3f77712011ac6806315aefc6');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_4d7efc4c3f77712011ac6806315aefc6');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_4d7efc4c3f77712011ac6806315aefc6');
        $d = new \Symfony\Bridge\Doctrine\Mapping\Driver\XmlDriver(array(0 => '/var/www/sites_symfony/vendor/bundles/IHQS/ContactBundle/Resources/config/doctrine', 1 => '/var/www/sites_symfony/vendor/bundles/Ivory/GoogleMapBundle/Resources/config/doctrine'));
        $d->setNamespacePrefixes(array('/var/www/sites_symfony/vendor/bundles/IHQS/ContactBundle/Resources/config/doctrine' => 'IHQS\\ContactBundle\\Entity', '/var/www/sites_symfony/vendor/bundles/Ivory/GoogleMapBundle/Resources/config/doctrine' => 'Ivory\\GoogleMapBundle\\Entity'));
        $d->setGlobalBasename('mapping');
        $e = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $e->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(new \Symfony\Bridge\Doctrine\Annotations\IndexedReader($this->get('annotation_reader')), array(0 => '/var/www/sites_symfony/vendor/bundles/Spip/AccesContentBundle/Entity')), 'Spip\\AccesContentBundle\\Entity');
        $e->addDriver($d, 'IHQS\\ContactBundle\\Entity');
        $e->addDriver($d, 'Ivory\\GoogleMapBundle\\Entity');
        $f = new \Doctrine\ORM\Configuration();
        $f->setEntityNamespaces(array('SpipAccesContentBundle' => 'Spip\\AccesContentBundle\\Entity', 'IHQSContactBundle' => 'IHQS\\ContactBundle\\Entity', 'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\Entity'));
        $f->setMetadataCacheImpl($a);
        $f->setQueryCacheImpl($b);
        $f->setResultCacheImpl($c);
        $f->setMetadataDriverImpl($e);
        $f->setProxyDir('/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/doctrine/orm/Proxies');
        $f->setProxyNamespace('Proxies');
        $f->setAutoGenerateProxyClasses(false);
        $f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        return $this->services['doctrine.orm.default_entity_manager'] = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $f);
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\EntityInitializer($this->get('doctrine'));
    }
    protected function getDoctrineOdm_Mongodb_Validator_UniqueService()
    {
        return $this->services['doctrine_odm.mongodb.validator.unique'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Validator\Constraints\UniqueValidator($this);
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Bundle\FrameworkBundle\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('kernel.request', array(0 => 'router_listener', 1 => 'onEarlyKernelRequest'), 255);
        $instance->addListenerService('kernel.request', array(0 => 'router_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'session_listener', 1 => 'onKernelRequest'), 128);
        $instance->addListenerService('kernel.request', array(0 => 'security.firewall', 1 => 'onKernelRequest'), 64);
        $instance->addListenerService('kernel.response', array(0 => 'security.rememberme.response_listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.exception', array(0 => 'twig.exception_listener', 1 => 'onKernelException'), -128);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.controller.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.converter.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.view', array(0 => 'sensio_framework_extra.view.listener', 1 => 'onKernelView'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sensio_framework_extra.cache.listener', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'security.extra.controller_listener', 1 => 'onCoreController'), -255);
        $instance->addListenerService('eyeswebcrea_secuserspace_admin.menu_configure', array(0 => 'eyeswebcrea_alias_content_editor.configure_menu_listener', 1 => 'onMenuConfigure'), 0);
        $instance->addListenerService('ihqs_contact.onContactRequest', array(0 => 'ihqs_contact.connectors.email.event_listener', 1 => 'onContactRequest'), 0);
        $instance->addListenerService('ihqs_contact.onContactRequest', array(0 => 'ihqs_contact.connectors.database.event_listener', 1 => 'onContactRequest'), 0);
        $instance->addListenerService('ihqs_contact.onContactRequest', array(0 => 'ihqs_contact.connectors.file.event_listener', 1 => 'onContactRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'ivory_google_map.geocoder.event_listener.fake_request', 1 => 'onKernelRequest'), 0);
        return $instance;
    }
    protected function getEyeswebcrea_SliderService()
    {
        return $this->services['eyeswebcrea.slider'] = new \Eyeswebcrea\SliderBundle\Twig\Extension\EyeswebcreaSliderExtension($this->get('doctrine'), $this);
    }
    protected function getEyeswebcreaAliasContentEditor_ConfigureMenuListenerService()
    {
        return $this->services['eyeswebcrea_alias_content_editor.configure_menu_listener'] = new \Eyeswebcrea\AliasContent\EditorBundle\EventListener\AdminMenuListener($this->get('doctrine'));
    }
    protected function getEyeswebcreaAssetService_HandleService()
    {
        return $this->services['eyeswebcrea_asset_service.handle'] = new \Eyeswebcrea\AssetServiceBundle\Service\AssetService();
    }
    protected function getEyeswebcreaReferencement_Sitemap_ProviderService()
    {
        return $this->services['eyeswebcrea_referencement.sitemap.provider'] = new \Eyeswebcrea\ReferencementBundle\Sitemap\ReferenceSitemapProvider($this->get('router'), $this);
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), 'ThisTokenIsNotSoSecretChangeIt');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('field' => 'form.type.field', 'form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'csrf' => 'form.type.csrf', 'entity' => 'form.type.entity', 'ihqs_contact_contact' => 'ihqs_contact.contact.form.type', 'document' => 'form.type.mongodb_document'), array('field' => array(0 => 'form.type_extension.field'), 'form' => array(0 => 'form.type_extension.csrf')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine', 2 => 'form.type_guesser.doctrine.mongodb'))));
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CsrfService()
    {
        return $this->services['form.type.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\CsrfType($this->get('form.csrf_provider'));
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FieldService()
    {
        return $this->services['form.type.field'] = new \Symfony\Component\Form\Extension\Core\Type\FieldType($this->get('validator'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType();
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_MongodbDocumentService()
    {
        return $this->services['form.type.mongodb_document'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Form\Type\DocumentType($this->get('doctrine.odm.mongodb.default_document_manager'));
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(true, '_token');
    }
    protected function getForm_TypeExtension_FieldService()
    {
        return $this->services['form.type_extension.field'] = new \Symfony\Component\Form\Extension\Validator\Type\FieldTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_Doctrine_MongodbService()
    {
        return $this->services['form.type_guesser.doctrine.mongodb'] = new \Symfony\Bundle\DoctrineMongoDBBundle\Form\DoctrineMongoDBTypeGuesser($this->get('doctrine.odm.mongodb.default_document_manager'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getGoogle_AnalyticsService()
    {
        return $this->services['google.analytics'] = new \AntiMattr\GoogleBundle\Analytics($this, array('default' => array('name' => 'MyJavaScriptCompatibleVariableNameWithNoSpaces', 'accountId' => 'UA-xxxx-x', 'domain' => '.mydomain.com', 'trackPageLoadTime' => true)), array());
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Bundle\FrameworkBundle\HttpKernel($this->get('event_dispatcher'), $this, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request')));
    }
    protected function getIhqsContact_Connector_DatabaseService()
    {
        return $this->services['ihqs_contact.connector.database'] = new \IHQS\ContactBundle\Connector\Database();
    }
    protected function getIhqsContact_Connector_EmailService()
    {
        return $this->services['ihqs_contact.connector.email'] = new \IHQS\ContactBundle\Connector\Email();
    }
    protected function getIhqsContact_Connectors_Database_EventListenerService()
    {
        $this->services['ihqs_contact.connectors.database.event_listener'] = $instance = new \IHQS\ContactBundle\Connector\Database();
        $instance->setContainer($this);
        $instance->setSpamDetector($this->get('ihqs_contact.spam_detector.stub'));
        return $instance;
    }
    protected function getIhqsContact_Connectors_Email_EventListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ihqs_contact.connectors.email.event_listener', 'request');
        }
        $this->services['ihqs_contact.connectors.email.event_listener'] = $this->scopedServices['request']['ihqs_contact.connectors.email.event_listener'] = $instance = new \IHQS\ContactBundle\Connector\Email();
        $instance->setContainer($this);
        $instance->setSpamDetector($this->get('ihqs_contact.spam_detector.stub'));
        return $instance;
    }
    protected function getIhqsContact_Connectors_File_EventListenerService()
    {
        $this->services['ihqs_contact.connectors.file.event_listener'] = $instance = new \IHQS\ContactBundle\Connector\File();
        $instance->setContainer($this);
        $instance->setSpamDetector($this->get('ihqs_contact.spam_detector.stub'));
        return $instance;
    }
    protected function getIhqsContact_Contact_FormService()
    {
        return $this->services['ihqs_contact.contact.form'] = $this->get('form.factory')->createNamed('ihqs_contact_contact', 'ihqs_contact_contact_form', '');
    }
    protected function getIhqsContact_Contact_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('ihqs_contact.contact.form.handler', 'request');
        }
        return $this->services['ihqs_contact.contact.form.handler'] = $this->scopedServices['request']['ihqs_contact.contact.form.handler'] = new \IHQS\ContactBundle\Form\Handler\ContactFormHandler($this->get('ihqs_contact.contact.form'), $this->get('request'), $this->get('ihqs_contact.contact_manager'), $this->get('event_dispatcher'));
    }
    protected function getIhqsContact_Contact_Form_TypeService()
    {
        return $this->services['ihqs_contact.contact.form.type'] = new \IHQS\ContactBundle\Form\Type\ContactFormType('IHQS\\ContactBundle\\Entity\\Contact');
    }
    protected function getIhqsContact_ContactManagerService()
    {
        $this->services['ihqs_contact.contact_manager'] = $instance = new \IHQS\ContactBundle\Entity\ContactManager($this->get('doctrine.orm.default_entity_manager'), 'IHQS\\ContactBundle\\Entity\\Contact');
        $instance->setContainer($this);
        return $instance;
    }
    protected function getIhqsContact_ProviderService()
    {
        return $this->services['ihqs_contact.provider'] = new \IHQS\ContactBundle\Provider\Provider($this);
    }
    protected function getIhqsContact_SpamDetector_StubService()
    {
        return $this->services['ihqs_contact.spam_detector.stub'] = new \IHQS\ContactBundle\SpamDetection\FalseDetector();
    }
    protected function getImage_HandlingService()
    {
        return $this->services['image.handling'] = new \Gregwar\ImageBundle\Services\ImageHandling('cache', 'Gregwar\\ImageBundle\\ImageHandler', $this);
    }
    protected function getIvoryGoogleMap_BoundService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Base\Bound();
        $instance->setPrefixJavascriptVariable('bound_');
        $instance->setSouthWest(NULL, NULL, NULL);
        $instance->setNorthEast(NULL, NULL, NULL);
        return $instance;
    }
    protected function getIvoryGoogleMap_CircleService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\Circle();
        $instance->setPrefixJavascriptVariable('circle_');
        $instance->setCenter(0, 0, true);
        $instance->setRadius(1);
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_CoordinateService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Base\Coordinate();
        $instance->setLatitude(0);
        $instance->setLongitude(0);
        $instance->setNoWrap(true);
        return $instance;
    }
    protected function getIvoryGoogleMap_DirectionsService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Services\Directions\DirectionsService();
        $instance->setUrl('http://maps.googleapis.com/maps/api/directions');
        $instance->setHttps(false);
        $instance->setFormat('json');
        return $instance;
    }
    protected function getIvoryGoogleMap_DirectionsRequestService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Services\Directions\DirectionsRequest();
        $instance->setAvoidHighways(NULL);
        $instance->setAvoidTolls(NULL);
        $instance->setOptimizeWaypoints(NULL);
        $instance->setProvideRouteAlternatives(NULL);
        $instance->setRegion(NULL);
        $instance->setTravelMode(NULL);
        $instance->setUnitSystem(NULL);
        $instance->setSensor(false);
        return $instance;
    }
    protected function getIvoryGoogleMap_EncodedPolylineService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\EncodedPolyline();
        $instance->setPrefixJavascriptVariable('encoded_polyline_');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_EventService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Events\Event();
        $instance->setPrefixJavascriptVariable('event_');
        return $instance;
    }
    protected function getIvoryGoogleMap_EventManagerService()
    {
        return new \Ivory\GoogleMapBundle\Model\Events\EventManager();
    }
    protected function getIvoryGoogleMap_GeocoderService()
    {
        return new \Ivory\GoogleMapBundle\Model\Services\Geocoding\Geocoder($this->get('ivory_google_map.geocoder.provider'));
    }
    protected function getIvoryGoogleMap_Geocoder_EventListener_FakeRequestService()
    {
        return $this->services['ivory_google_map.geocoder.event_listener.fake_request'] = new \Ivory\GoogleMapBundle\EventListener\FakeRequestListener('');
    }
    protected function getIvoryGoogleMap_GeocoderRequestService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Services\Geocoding\GeocoderRequest();
        $instance->setAddress(NULL);
        $instance->setCoordinate(NULL, NULL, NULL);
        $instance->setBound(NULL, NULL, NULL, NULL, NULL, NULL);
        $instance->setRegion(NULL);
        $instance->setLanguage(NULL);
        $instance->setSensor(false);
        return $instance;
    }
    protected function getIvoryGoogleMap_GroundOverlayService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\GroundOverlay();
        $instance->setPrefixJavascriptVariable('ground_overlay_');
        $instance->setUrl('');
        $instance->setBound(-1, -1, 1, 1, true, true);
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_Helper_MapService()
    {
        $a = new \Ivory\GoogleMapBundle\Templating\Helper\Base\CoordinateHelper();
        $b = new \Ivory\GoogleMapBundle\Templating\Helper\MapTypeIdHelper();
        $c = new \Ivory\GoogleMapBundle\Templating\Helper\Controls\ControlPositionHelper();
        $d = new \Ivory\GoogleMapBundle\Templating\Helper\Base\SizeHelper();
        $e = new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\InfoWindowHelper($a, $d);
        $f = new \Ivory\GoogleMapBundle\Templating\Helper\Base\BoundHelper($a);
        return $this->services['ivory_google_map.helper.map'] = new \Ivory\GoogleMapBundle\Templating\Helper\MapHelper($a, $b, new \Ivory\GoogleMapBundle\Templating\Helper\Controls\MapTypeControlHelper($b, $c, new \Ivory\GoogleMapBundle\Templating\Helper\Controls\MapTypeControlStyleHelper()), new \Ivory\GoogleMapBundle\Templating\Helper\Controls\OverviewMapControlHelper(), new \Ivory\GoogleMapBundle\Templating\Helper\Controls\PanControlHelper($c), new \Ivory\GoogleMapBundle\Templating\Helper\Controls\RotateControlHelper($c), new \Ivory\GoogleMapBundle\Templating\Helper\Controls\ScaleControlHelper($c, new \Ivory\GoogleMapBundle\Templating\Helper\Controls\ScaleControlStyleHelper()), new \Ivory\GoogleMapBundle\Templating\Helper\Controls\StreetViewControlHelper($c), new \Ivory\GoogleMapBundle\Templating\Helper\Controls\ZoomControlHelper($c, new \Ivory\GoogleMapBundle\Templating\Helper\Controls\ZoomControlStyleHelper()), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\MarkerHelper($a, new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\AnimationHelper(), $e, new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\MarkerImageHelper(new \Ivory\GoogleMapBundle\Templating\Helper\Base\PointHelper(), $d), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\MarkerShapeHelper()), $f, $e, new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\PolylineHelper($a), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\EncodedPolylineHelper(new \Ivory\GoogleMapBundle\Templating\Helper\Geometry\EncodingHelper()), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\PolygonHelper($a), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\RectangleHelper($f), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\CircleHelper($a), new \Ivory\GoogleMapBundle\Templating\Helper\Overlays\GroundOverlayHelper($f), new \Ivory\GoogleMapBundle\Templating\Helper\Layers\KMLLayerHelper(), new \Ivory\GoogleMapBundle\Templating\Helper\Events\EventManagerHelper(new \Ivory\GoogleMapBundle\Templating\Helper\Events\EventHelper()));
    }
    protected function getIvoryGoogleMap_InfoWindowService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\InfoWindow();
        $instance->setPrefixJavascriptVariable('info_window_');
        $instance->setPosition(0, 0, true);
        $instance->setContent('<p>Default content</p>');
        $instance->setPixelOffset(NULL, NULL, NULL, NULL);
        $instance->setOpen(false);
        $instance->setAutoOpen(true);
        $instance->setOpenEvent('click');
        $instance->setAutoClose(false);
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_KmlLayerService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Layers\KMLLayer();
        $instance->setPrefixJavascriptVariable('kml_layer_');
        $instance->setUrl('');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MapService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Map();
        $instance->setPrefixJavascriptVariable('map_');
        $instance->setHtmlContainerId('map_canvas');
        $instance->setAsync(false);
        $instance->setAutoZoom(false);
        $instance->setCenter(0, 0, true);
        $instance->setBound(NULL, NULL, NULL, NULL, NULL, NULL);
        $instance->setMapOption('mapTypeId', 'roadmap');
        $instance->setMapOption('zoom', 3);
        $instance->setStylesheetOption('width', '300px');
        $instance->setStylesheetOption('height', '300px');
        $instance->setMapOptions(array());
        $instance->setStylesheetOptions(array());
        $instance->setLanguage('en');
        $instance->setEventManager(new \Ivory\GoogleMapBundle\Model\Events\EventManager());
        return $instance;
    }
    protected function getIvoryGoogleMap_MapTypeControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\MapTypeControl();
        $instance->setMapTypeIds(array(0 => 'roadmap', 1 => 'satellite'));
        $instance->setControlPosition('top_right');
        $instance->setMapTypeControlStyle('default');
        return $instance;
    }
    protected function getIvoryGoogleMap_MarkerService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\Marker();
        $instance->setPrefixJavascriptVariable('marker_');
        $instance->setPosition(0, 0, true);
        $instance->setAnimation(NULL);
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_MarkerImageService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerImage();
        $instance->setPrefixJavascriptVariable('marker_image_');
        $instance->setUrl('http://maps.gstatic.com/mapfiles/markers/marker.png');
        $instance->setAnchor(NULL, NULL);
        $instance->setOrigin(NULL, NULL);
        $instance->setScaledSize(NULL, NULL, NULL, NULL);
        $instance->setSize(NULL, NULL, NULL, NULL);
        return $instance;
    }
    protected function getIvoryGoogleMap_MarkerShapeService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\MarkerShape();
        $instance->setPrefixJavascriptVariable('marker_shape_');
        $instance->setType('poly');
        $instance->setCoordinates(array(0 => 1, 1 => 1, 2 => 1, 3 => -1, 4 => -1, 5 => -1, 6 => -1, 7 => 1));
        return $instance;
    }
    protected function getIvoryGoogleMap_OverviewMapControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\OverviewMapControl();
        $instance->setOpened(false);
        return $instance;
    }
    protected function getIvoryGoogleMap_PanControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\PanControl();
        $instance->setControlPosition('top_left');
        return $instance;
    }
    protected function getIvoryGoogleMap_PointService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Base\Point();
        $instance->setX(0);
        $instance->setY(0);
        return $instance;
    }
    protected function getIvoryGoogleMap_PolygonService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\Polygon();
        $instance->setPrefixJavascriptVariable('polygon_');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_PolylineService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\Polyline();
        $instance->setPrefixJavascriptVariable('polyline_');
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_RectangleService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Overlays\Rectangle();
        $instance->setPrefixJavascriptVariable('rectangle_');
        $instance->setBound(-1, -1, 1, 1, true, true);
        $instance->setOptions(array());
        return $instance;
    }
    protected function getIvoryGoogleMap_RotateControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\RotateControl();
        $instance->setControlPosition('top_left');
        return $instance;
    }
    protected function getIvoryGoogleMap_ScaleControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\ScaleControl();
        $instance->setControlPosition('bottom_left');
        $instance->setScaleControlStyle('default');
        return $instance;
    }
    protected function getIvoryGoogleMap_SizeService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Base\Size();
        $instance->setWidth(1);
        $instance->setHeight(1);
        $instance->setWidthUnit(NULL);
        $instance->setHeightUnit(NULL);
        return $instance;
    }
    protected function getIvoryGoogleMap_StreetViewControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\StreetViewControl();
        $instance->setControlPosition('top_left');
        return $instance;
    }
    protected function getIvoryGoogleMap_ZoomControlService()
    {
        $instance = new \Ivory\GoogleMapBundle\Model\Controls\ZoomControl();
        $instance->setControlPosition('top_left');
        $instance->setZoomControlStyle('default');
        return $instance;
    }
    protected function getKernelService()
    {
        throw new \RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig');
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMailerService()
    {
        return $this->services['mailer'] = new \Swift_Mailer($this->get('swiftmailer.transport'));
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true);
    }
    protected function getMonolog_Handler_NestedService()
    {
        return $this->services['monolog.handler.nested'] = new \Monolog\Handler\StreamHandler('/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/logs/prod.log', 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new \RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/config/routing.yml', array('cache_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appprodUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appprodUrlMatcher'));
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\RouterListener($this->get('router'), 80, 443, $this->get('monolog.logger.request'));
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router'), $d);
    }
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('logger'));
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('Symfony\\Component\\Security\\Core\\User\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder', 'arguments' => array(0 => false))));
    }
    protected function getSecurity_Extra_ControllerListenerService()
    {
        return $this->services['security.extra.controller_listener'] = new \JMS\SecurityExtraBundle\Controller\ControllerListener($this, $this->get('annotation_reader'));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/login$'), 'security.firewall.map.context.secured_area' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/demo/secured/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }
    protected function getSecurity_Firewall_Map_Context_SecuredAreaService()
    {
        $a = $this->get('monolog.logger.security');
        $b = $this->get('security.context');
        $c = $this->get('event_dispatcher');
        $d = $this->get('router');
        $e = $this->get('security.authentication.manager');
        $f = new \Symfony\Component\Security\Http\AccessMap();
        $g = new \Symfony\Component\Security\Http\HttpUtils($d);
        $h = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $g, '/demo/secured/logout', '/demo/', NULL);
        $h->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        return $this->services['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($f, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('security.user.provider.concrete.in_memory')), 'secured_area', $a, $c), 2 => $h, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $e, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $g, 'secured_area', array('check_path' => '/demo/secured/login_check', 'login_path' => '/demo/secured/login', 'use_forward' => false, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false, 'failure_path' => NULL, 'failure_forward' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), NULL, NULL, $a, $c), 4 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $f, $e, $a)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $g, new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), $g, '/demo/secured/login', false), NULL, NULL, $a));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Bundle\SecurityBundle\EventListener\ResponseListener();
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine'));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0);
        return $instance;
    }
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }
    protected function getServiceContainerService()
    {
        throw new \RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session($this->get('session.storage'), 'fr');
    }
    protected function getSession_StorageService()
    {
        return $this->services['session.storage'] = new \Symfony\Component\HttpFoundation\SessionStorage\NativeSessionStorage(array());
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this, true);
    }
    protected function getSitemapService()
    {
        return $this->services['sitemap'] = new \Avalanche\Bundle\SitemapBundle\Sitemap($this->get('sitemap.url.repository'));
    }
    protected function getSitemap_ControllerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sitemap.controller', 'request');
        }
        return $this->services['sitemap.controller'] = $this->scopedServices['request']['sitemap.controller'] = new \Avalanche\Bundle\SitemapBundle\Controller\SitemapController($this->get('sitemap'), $this->get('templating'), $this->get('request'));
    }
    protected function getSitemap_Provider_ChainService()
    {
        $this->services['sitemap.provider.chain'] = $instance = new \Avalanche\Bundle\SitemapBundle\Sitemap\ProviderChain();
        $instance->add($this->get('eyeswebcrea_referencement.sitemap.provider'));
        return $instance;
    }
    protected function getSitemap_Twig_ExtensionService()
    {
        return $this->services['sitemap.twig.extension'] = new \Avalanche\Bundle\SitemapBundle\Templating\SitemapExtension('http://www.votresite.fr/');
    }
    protected function getSitemap_Url_MapperService()
    {
        return $this->services['sitemap.url.mapper'] = new \Avalanche\Bundle\SitemapBundle\Document\MetadataMapper('app_urls', 'votre_site', 'Avalanche\\Bundle\\SitemapBundle\\Sitemap\\Url');
    }
    protected function getSitemap_Url_RepositoryService()
    {
        return $this->services['sitemap.url.repository'] = $this->get('doctrine.odm.mongodb.default_document_manager')->getRepository('Avalanche\\Bundle\\SitemapBundle\\Sitemap\\Url');
    }
    protected function getSpipAccesContent_ArticleManagerService()
    {
        return $this->services['spip_acces_content.article_manager'] = new \Spip\AccesContentBundle\AliasContentManager\ArticleManager($this->get('doctrine'));
    }
    protected function getSpipAccesContent_ContentManagerService()
    {
        return $this->services['spip_acces_content.content_manager'] = new \Spip\AccesContentBundle\AliasContentManager\ContentManager($this->get('doctrine'), $this->get('form.factory'));
    }
    protected function getSwiftmailer_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.plugin.messagelogger'] = new \Symfony\Bundle\SwiftmailerBundle\Logger\MessageLogger();
    }
    protected function getSwiftmailer_TransportService()
    {
        $this->services['swiftmailer.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), new \Swift_Events_SimpleEventDispatcher());
        $instance->setHost('localhost');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername('');
        $instance->setPassword('');
        $instance->setAuthMode(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.globals'));
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('http_kernel'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, NULL), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.static', 'ivory_google_map' => 'ivory_google_map.helper.map', 'google_analytics' => 'templating.helper.google_analytics'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper($a, array(0 => 'FrameworkBundle:Form'));
    }
    protected function getTemplating_Helper_GoogleAnalyticsService()
    {
        return $this->services['templating.helper.google_analytics'] = new \AntiMattr\GoogleBundle\Helper\AnalyticsHelper($this->get('google.analytics'), 'https://ssl', 'http://www', '.google-analytics.com/ga.js');
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context'));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => 'php', 'translation.loader.yml' => 'yml', 'translation.loader.xliff' => 'xliff'), array('cache_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/translations', 'debug' => false), $this->get('session'));
        $instance->setFallbackLocale('en');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ro.xliff', 'ro', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fr.xliff', 'fr', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.de.xliff', 'de', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.da.xliff', 'da', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sk.xliff', 'sk', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.pl.xliff', 'pl', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ua.xliff', 'ua', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.pt_BR.xliff', 'pt_BR', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.mn.xliff', 'mn', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.hu.xliff', 'hu', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fa.xliff', 'fa', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.cs.xliff', 'cs', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sr.xliff', 'sr', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.it.xliff', 'it', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.pt_PT.xliff', 'pt_PT', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ja.xliff', 'ja', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.nl.xliff', 'nl', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sv.xliff', 'sv', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.fi.xliff', 'fi', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.es.xliff', 'es', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.eu.xliff', 'eu', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.zh_CN.xliff', 'zh_CN', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.lb.xliff', 'lb', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ca.xliff', 'ca', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.he.xliff', 'he', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.et.xliff', 'et', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.hy.xliff', 'hy', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.id.xliff', 'id', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.lt.xliff', 'lt', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.sl.xliff', 'sl', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/translations/validators.ru.xliff', 'ru', 'validators');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/ReferencementBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/AssetServiceBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/AliasContent/ViewerBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/AliasContent/EditorBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/SecuserSpace/AdminBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/SecuserSpace/UserBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Eyeswebcrea/SliderBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/vendor/bundles/Spip/AccesContentBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        $instance->addResource('yml', '/var/www/sites_symfony/vendor/bundles/IHQS/ContactBundle/Resources/translations/messages.fr.yml', 'fr', 'messages');
        $instance->addResource('yml', '/var/www/sites_symfony/vendor/bundles/IHQS/ContactBundle/Resources/translations/messages.en.yml', 'en', 'messages');
        $instance->addResource('xliff', '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/src/Site/HomeBundle/Resources/translations/messages.fr.xliff', 'fr', 'messages');
        return $instance;
    }
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', 'cache' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/twig', 'charset' => 'UTF-8'));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\SecurityExtension($this->get('security.context')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\CodeExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => 'form_div_layout.html.twig')));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), false, array()));
        $instance->addExtension($this->get('eyeswebcrea.slider'));
        $instance->addExtension($this->get('twig.spip_acces_content'));
        $instance->addExtension($this->get('twig.extension.image'));
        $instance->addExtension(new \Ivory\GoogleMapBundle\Twig\GoogleMapExtension($this->get('ivory_google_map.helper.map')));
        $instance->addExtension(new \AntiMattr\GoogleBundle\Extension\AnalyticsExtension($this->get('templating.helper.google_analytics')));
        $instance->addExtension($this->get('sitemap.twig.extension'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        return $instance;
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction', $this->get('monolog.logger.request'));
    }
    protected function getTwig_Extension_ImageService()
    {
        return $this->services['twig.extension.image'] = new \Gregwar\ImageBundle\Extensions\ImageTwig($this);
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('/var/www/sites_symfony/vendor/symfony/src/Symfony/Bundle/TwigBundle/DependencyInjection/../../../Bridge/Twig/Resources/views/Form');
        $instance->addPath('/var/www/sites_symfony/vendor/KnpMenu/src/Knp/Menu/Resources/views');
        return $instance;
    }
    protected function getTwig_SpipAccesContentService()
    {
        return $this->services['twig.spip_acces_content'] = new \Spip\AccesContentBundle\Twig\Extension\SpipAccesContentExtension($this->get('doctrine'), $this->get('session'));
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'doctrine_odm.mongodb.unique' => 'doctrine_odm.mongodb.validator.unique')), array(0 => $this->get('doctrine.orm.validator_initializer')));
    }
    protected function getDatabaseConnectionService()
    {
        return $this->get('doctrine.dbal.default_connection');
    }
    protected function getDoctrine_Odm_Mongodb_CacheService()
    {
        return $this->get('doctrine.odm.mongodb.cache.array');
    }
    protected function getDoctrine_Odm_Mongodb_DocumentManagerService()
    {
        return $this->get('doctrine.odm.mongodb.default_document_manager');
    }
    protected function getDoctrine_Odm_Mongodb_Metadata_AnnotationReaderService()
    {
        return $this->get('annotation_reader');
    }
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getIhqsContact_ModelManagerService()
    {
        return $this->get('doctrine.orm.default_entity_manager');
    }
    protected function getIhqsSpamDetectorService()
    {
        return $this->get('ihqs_contact.spam_detector.stub');
    }
    protected function getTranslatorService()
    {
        return $this->get('translator.default');
    }
    protected function getAssetic_AssetFactoryService()
    {
        return $this->services['assetic.asset_factory'] = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, new \Symfony\Component\DependencyInjection\ParameterBag\ParameterBag($this->getDefaultParameters()), '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/../web', false);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getIvoryGoogleMap_Geocoder_ProviderService()
    {
        return $this->services['ivory_google_map.geocoder.provider'] = new \Ivory\GoogleMapBundle\Model\Services\Geocoding\Provider(new \Geocoder\HttpAdapter\BuzzHttpAdapter(), '', '');
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        return $this->services['security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ALLOWED_TO_SWITCH')))), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true);
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        return $this->services['security.authentication.manager'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('security.user.provider.concrete.in_memory'), new \Symfony\Component\Security\Core\User\UserChecker(), 'secured_area', $this->get('security.encoder_factory'), true)));
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        $this->services['security.user.provider.concrete.in_memory'] = $instance = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('user', 'userpass', array(0 => 'ROLE_USER')));
        $instance->createUser(new \Symfony\Component\Security\Core\User\User('admin', 'adminpass', array(0 => 'ROLE_ADMIN')));
        return $instance;
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod');
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/var/www/sites_symfony/vendor/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!array_key_exists($name, $this->parameters)) {
            throw new \InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        return array_key_exists(strtolower($name), $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new \LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app',
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod',
            'kernel.logs_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Symfony\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'EyeswebcreaReferencementBundle' => 'Eyeswebcrea\\ReferencementBundle\\EyeswebcreaReferencementBundle',
                'EyeswebcreaAssetServiceBundle' => 'Eyeswebcrea\\AssetServiceBundle\\EyeswebcreaAssetServiceBundle',
                'EyeswebcreaAliasContentViewerBundle' => 'Eyeswebcrea\\AliasContent\\ViewerBundle\\EyeswebcreaAliasContentViewerBundle',
                'EyeswebcreaAliasContentEditorBundle' => 'Eyeswebcrea\\AliasContent\\EditorBundle\\EyeswebcreaAliasContentEditorBundle',
                'EyeswebcreaSecuserSpaceAdminBundle' => 'Eyeswebcrea\\SecuserSpace\\AdminBundle\\EyeswebcreaSecuserSpaceAdminBundle',
                'EyeswebcreaSecuserSpaceUserBundle' => 'Eyeswebcrea\\SecuserSpace\\UserBundle\\EyeswebcreaSecuserSpaceUserBundle',
                'EyeswebcreaSliderBundle' => 'Eyeswebcrea\\SliderBundle\\EyeswebcreaSliderBundle',
                'SpipAccesContentBundle' => 'Spip\\AccesContentBundle\\SpipAccesContentBundle',
                'GregwarImageBundle' => 'Gregwar\\ImageBundle\\GregwarImageBundle',
                'IHQSContactBundle' => 'IHQS\\ContactBundle\\IHQSContactBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'GoogleBundle' => 'AntiMattr\\GoogleBundle\\GoogleBundle',
                'DoctrineFixturesBundle' => 'Symfony\\Bundle\\DoctrineFixturesBundle\\DoctrineFixturesBundle',
                'DoctrineMongoDBBundle' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\DoctrineMongoDBBundle',
                'AvalancheSitemapBundle' => 'Avalanche\\Bundle\\SitemapBundle\\AvalancheSitemapBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SiteHomeBundle' => 'Site\\HomeBundle\\SiteHomeBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_driver' => 'pdo_sqlite',
            'database_host' => 'localhost',
            'database_port' => '',
            'database_user' => 'john',
            'database_password' => '147258',
            'database_name' => 'default.sqlite',
            'database_path' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/../spip/config/bases/default.sqlite',
            'mailer_transport' => 'smtp',
            'mailer_host' => 'localhost',
            'mailer_user' => '',
            'mailer_password' => '',
            'locale' => 'fr',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'router_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\RouterListener',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'event_dispatcher.class' => 'Symfony\\Bundle\\FrameworkBundle\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Bundle\\FrameworkBundle\\HttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.trust_proxy_headers' => false,
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\NativeSessionStorage',
            'session.storage.filesystem.class' => 'Symfony\\Component\\HttpFoundation\\SessionStorage\\FilesystemSessionStorage',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.default_locale' => 'fr',
            'session.storage.options' => array(
            ),
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/var/www/sites_symfony/vendor/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appprodUrlMatcher',
            'router.options.generator.cache_class' => 'appprodUrlGenerator',
            'router.resource' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/config/routing.yml',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.user.provider.entity.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Bundle\\SecurityBundle\\EventListener\\ResponseListener',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_ADMIN',
                    2 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.exception_listener.controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction',
                'cache' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/twig',
                'charset' => 'UTF-8',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\Logger\\MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.plugin.antiflood.threshold' => 99,
            'swiftmailer.plugin.antiflood.sleep' => 0,
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.transport.smtp.encryption' => NULL,
            'swiftmailer.transport.smtp.port' => 25,
            'swiftmailer.transport.smtp.host' => 'localhost',
            'swiftmailer.transport.smtp.username' => '',
            'swiftmailer.transport.smtp.password' => '',
            'swiftmailer.transport.smtp.auth_mode' => NULL,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.sender_address' => NULL,
            'swiftmailer.single_address' => NULL,
            'doctrine.dbal.logger.debug.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Doctrine\\Common\\EventManager',
            'doctrine.dbal.connection_factory.class' => 'Symfony\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Symfony\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.annotation_reader.class' => 'Symfony\\Bridge\\Doctrine\\Annotations\\IndexedReader',
            'doctrine.orm.metadata.xml.class' => 'Symfony\\Bridge\\Doctrine\\Mapping\\Driver\\XmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Symfony\\Bridge\\Doctrine\\Mapping\\Driver\\YamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\EntityInitializer',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/assetic',
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => false,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/../web',
            'assetic.write_to' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/../web',
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'assetic.asset_writer_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetWriterCacheWarmer',
            'assetic.asset_writer.class' => 'Assetic\\AssetWriter',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'security.secured_services' => array(
            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.extra.controller_listener.class' => 'JMS\\SecurityExtraBundle\\Controller\\ControllerListener',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.secure_all_services' => false,
            'rubriqueid' => 1,
            'article_manager' => 'spip_acces_content.article_manager',
            'routes_sitemap' => array(
            ),
            'rubrique_manager' => NULL,
            'theme' => 'Slider',
            'gregwar_image.cache_dir' => 'cache',
            'image.handling.class' => 'Gregwar\\ImageBundle\\Services\\ImageHandling',
            'image.handler.class' => 'Gregwar\\ImageBundle\\ImageHandler',
            'ihqs_contact.spam_detector.class' => 'IHQS\\ContactBundle\\SpamDetection\\FalseDetector',
            'ihqs_contact.form.contact.class' => 'IHQS\\ContactBundle\\Form\\ContactForm',
            'ihqs_contact.contact.form.name' => 'ihqs_contact_contact_form',
            'ihqs_contact.connector.email.class' => 'IHQS\\ContactBundle\\Connector\\Email',
            'ihqs_contact.connector.database.class' => 'IHQS\\ContactBundle\\Connector\\Database',
            'ihqs_contact.provider.class' => 'IHQS\\ContactBundle\\Provider\\Provider',
            'ihqs_contact.model.contact.class' => 'IHQS\\ContactBundle\\Entity\\Contact',
            'ihqs_contact.manager.contact.class' => 'IHQS\\ContactBundle\\Entity\\ContactManager',
            'ihqs_contact.email.recipients' => 'jpasqualini@eyeswebcrea.fr',
            'ihqs_contact.connectors.email.event_listener.class' => 'IHQS\\ContactBundle\\Connector\\Email',
            'ihqs_contact.connectors.database.event_listener.class' => 'IHQS\\ContactBundle\\Connector\\Database',
            'ihqs_contact.connectors.file.event_listener.class' => 'IHQS\\ContactBundle\\Connector\\File',
            'ihqs_contact.contact.form.view' => NULL,
            'ihqs_contact.contact.form.type' => 'ihqs_contact_contact',
            'ihqs_contact.contact.form.handler' => 'ihqs_contact.contact.form.handler.default',
            'ihqs_contact.contact.form.validation_groups' => array(
                0 => 'Contact',
            ),
            'ivory_google_map.map.class' => 'Ivory\\GoogleMapBundle\\Model\\Map',
            'ivory_google_map.coordinate.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\Coordinate',
            'ivory_google_map.bound.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\Bound',
            'ivory_google_map.point.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\Point',
            'ivory_google_map.size.class' => 'Ivory\\GoogleMapBundle\\Model\\Base\\Size',
            'ivory_google_map.map_type_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\MapTypeControl',
            'ivory_google_map.overview_map_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\OverviewMapControl',
            'ivory_google_map.pan_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\PanControl',
            'ivory_google_map.rotate_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\RotateControl',
            'ivory_google_map.scale_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\ScaleControl',
            'ivory_google_map.street_view_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\StreetViewControl',
            'ivory_google_map.zoom_control.class' => 'Ivory\\GoogleMapBundle\\Model\\Controls\\ZoomControl',
            'ivory_google_map.marker.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\Marker',
            'ivory_google_map.marker_image.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerImage',
            'ivory_google_map.marker_shape.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\MarkerShape',
            'ivory_google_map.info_window.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\InfoWindow',
            'ivory_google_map.polyline.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\Polyline',
            'ivory_google_map.encoded_polyline.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\EncodedPolyline',
            'ivory_google_map.polygon.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\Polygon',
            'ivory_google_map.rectangle.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\Rectangle',
            'ivory_google_map.circle.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\Circle',
            'ivory_google_map.ground_overlay.class' => 'Ivory\\GoogleMapBundle\\Model\\Overlays\\GroundOverlay',
            'ivory_google_map.kml_layer.class' => 'Ivory\\GoogleMapBundle\\Model\\Layers\\KMLLayer',
            'ivory_google_map.event_manager.class' => 'Ivory\\GoogleMapBundle\\Model\\Events\\EventManager',
            'ivory_google_map.event.class' => 'Ivory\\GoogleMapBundle\\Model\\Events\\Event',
            'ivory_google_map.geocoder.class' => 'Ivory\\GoogleMapBundle\\Model\\Services\\Geocoding\\Geocoder',
            'ivory_google_map.geocoder.provider.class' => 'Ivory\\GoogleMapBundle\\Model\\Services\\Geocoding\\Provider',
            'ivory_google_map.geocoder.adapter.class' => 'Geocoder\\HttpAdapter\\BuzzHttpAdapter',
            'ivory_google_map.geocoder_request.class' => 'Ivory\\GoogleMapBundle\\Model\\Services\\Geocoding\\GeocoderRequest',
            'ivory_google_map.directions.class' => 'Ivory\\GoogleMapBundle\\Model\\Services\\Directions\\DirectionsService',
            'ivory_google_map.directions_request.class' => 'Ivory\\GoogleMapBundle\\Model\\Services\\Directions\\DirectionsRequest',
            'ivory_google_map.geocoder.event_listener.fake_request.class' => 'Ivory\\GoogleMapBundle\\EventListener\\FakeRequestListener',
            'ivory_google_map.map.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\MapHelper',
            'ivory_google_map.map_type_id.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\MapTypeIdHelper',
            'ivory_google_map.coordinate.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Base\\CoordinateHelper',
            'ivory_google_map.bound.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Base\\BoundHelper',
            'ivory_google_map.point.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Base\\PointHelper',
            'ivory_google_map.size.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Base\\SizeHelper',
            'ivory_google_map.map_type_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\MapTypeControlHelper',
            'ivory_google_map.control_position.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\ControlPositionHelper',
            'ivory_google_map.map_type_control_style.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\MapTypeControlStyleHelper',
            'ivory_google_map.overview_map_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\OverviewMapControlHelper',
            'ivory_google_map.pan_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\PanControlHelper',
            'ivory_google_map.rotate_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\RotateControlHelper',
            'ivory_google_map.scale_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\ScaleControlHelper',
            'ivory_google_map.scale_control_style.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\ScaleControlStyleHelper',
            'ivory_google_map.street_view_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\StreetViewControlHelper',
            'ivory_google_map.zoom_control.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\ZoomControlHelper',
            'ivory_google_map.zoom_control_style.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Controls\\ZoomControlStyleHelper',
            'ivory_google_map.marker.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\MarkerHelper',
            'ivory_google_map.marker_image.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\MarkerImageHelper',
            'ivory_google_map.marker_shape.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\MarkerShapeHelper',
            'ivory_google_map.animation.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\AnimationHelper',
            'ivory_google_map.info_window.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\InfoWindowHelper',
            'ivory_google_map.polyline.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\PolylineHelper',
            'ivory_google_map.polygon.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\PolygonHelper',
            'ivory_google_map.rectangle.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\RectangleHelper',
            'ivory_google_map.circle.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\CircleHelper',
            'ivory_google_map.ground_overlay.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\GroundOverlayHelper',
            'ivory_google_map.kml_layer.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Layers\\KMLLayerHelper',
            'ivory_google_map.event_manager.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Events\\EventManagerHelper',
            'ivory_google_map.event.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Events\\EventHelper',
            'ivory_google_map.encoded_polyline.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Overlays\\EncodedPolylineHelper',
            'ivory_google_map.encoding.helper' => 'Ivory\\GoogleMapBundle\\Templating\\Helper\\Geometry\\EncodingHelper',
            'ivory_google_map.map.prefix_javascript_variable' => 'map_',
            'ivory_google_map.map.html_container' => 'map_canvas',
            'ivory_google_map.map.async' => false,
            'ivory_google_map.map.auto_zoom' => false,
            'ivory_google_map.map.center.longitude' => 0,
            'ivory_google_map.map.center.latitude' => 0,
            'ivory_google_map.map.center.no_wrap' => true,
            'ivory_google_map.map.bound.south_west.longitude' => NULL,
            'ivory_google_map.map.bound.south_west.latitude' => NULL,
            'ivory_google_map.map.bound.south_west.no_wrap' => NULL,
            'ivory_google_map.map.bound.north_east.longitude' => NULL,
            'ivory_google_map.map.bound.north_east.latitude' => NULL,
            'ivory_google_map.map.bound.north_east.no_wrap' => NULL,
            'ivory_google_map.map.type' => 'roadmap',
            'ivory_google_map.map.zoom' => 3,
            'ivory_google_map.map.width' => '300px',
            'ivory_google_map.map.height' => '300px',
            'ivory_google_map.map.map_options' => array(
            ),
            'ivory_google_map.map.stylesheet_options' => array(
            ),
            'ivory_google_map.map.language' => 'en',
            'ivory_google_map.coordinate.latitude' => 0,
            'ivory_google_map.coordinate.longitude' => 0,
            'ivory_google_map.coordinate.no_wrap' => true,
            'ivory_google_map.bound.prefix_javascript_variable' => 'bound_',
            'ivory_google_map.bound.south_west.longitude' => NULL,
            'ivory_google_map.bound.south_west.latitude' => NULL,
            'ivory_google_map.bound.south_west.no_wrap' => NULL,
            'ivory_google_map.bound.north_east.longitude' => NULL,
            'ivory_google_map.bound.north_east.latitude' => NULL,
            'ivory_google_map.bound.north_east.no_wrap' => NULL,
            'ivory_google_map.point.x' => 0,
            'ivory_google_map.point.y' => 0,
            'ivory_google_map.size.width' => 1,
            'ivory_google_map.size.height' => 1,
            'ivory_google_map.size.width_unit' => NULL,
            'ivory_google_map.size.height_unit' => NULL,
            'ivory_google_map.map_type_control.map_type_ids' => array(
                0 => 'roadmap',
                1 => 'satellite',
            ),
            'ivory_google_map.map_type_control.control_position' => 'top_right',
            'ivory_google_map.map_type_control.map_type_control_style' => 'default',
            'ivory_google_map.overview_map_control.opened' => false,
            'ivory_google_map.pan_control.control_position' => 'top_left',
            'ivory_google_map.rotate_control.control_position' => 'top_left',
            'ivory_google_map.scale_control.control_position' => 'bottom_left',
            'ivory_google_map.scale_control.scale_control_style' => 'default',
            'ivory_google_map.street_view_control.control_position' => 'top_left',
            'ivory_google_map.zoom_control.control_position' => 'top_left',
            'ivory_google_map.zoom_control.zoom_control_style' => 'default',
            'ivory_google_map.marker.prefix_javascript_variable' => 'marker_',
            'ivory_google_map.marker.position.latitude' => 0,
            'ivory_google_map.marker.position.longitude' => 0,
            'ivory_google_map.marker.position.no_wrap' => true,
            'ivory_google_map.marker.animation' => NULL,
            'ivory_google_map.marker.options' => array(
            ),
            'ivory_google_map.marker_image.prefix_javascript_variable' => 'marker_image_',
            'ivory_google_map.marker_image.url' => 'http://maps.gstatic.com/mapfiles/markers/marker.png',
            'ivory_google_map.marker_image.anchor.x' => NULL,
            'ivory_google_map.marker_image.anchor.y' => NULL,
            'ivory_google_map.marker_image.origin.x' => NULL,
            'ivory_google_map.marker_image.origin.y' => NULL,
            'ivory_google_map.marker_image.scaled_size.width' => NULL,
            'ivory_google_map.marker_image.scaled_size.height' => NULL,
            'ivory_google_map.marker_image.scaled_size.width_unit' => NULL,
            'ivory_google_map.marker_image.scaled_size.height_unit' => NULL,
            'ivory_google_map.marker_image.size.width' => NULL,
            'ivory_google_map.marker_image.size.height' => NULL,
            'ivory_google_map.marker_image.size.width_unit' => NULL,
            'ivory_google_map.marker_image.size.height_unit' => NULL,
            'ivory_google_map.marker_shape.prefix_javascript_variable' => 'marker_shape_',
            'ivory_google_map.marker_shape.type' => 'poly',
            'ivory_google_map.marker_shape.coordinates' => array(
                0 => 1,
                1 => 1,
                2 => 1,
                3 => -1,
                4 => -1,
                5 => -1,
                6 => -1,
                7 => 1,
            ),
            'ivory_google_map.info_window.prefix_javascript_variable' => 'info_window_',
            'ivory_google_map.info_window.position.latitude' => 0,
            'ivory_google_map.info_window.position.longitude' => 0,
            'ivory_google_map.info_window.position.no_wrap' => true,
            'ivory_google_map.info_window.pixel_offset.width' => NULL,
            'ivory_google_map.info_window.pixel_offset.height' => NULL,
            'ivory_google_map.info_window.pixel_offset.width_unit' => NULL,
            'ivory_google_map.info_window.pixel_offset.height_unit' => NULL,
            'ivory_google_map.info_window.content' => '<p>Default content</p>',
            'ivory_google_map.info_window.open' => false,
            'ivory_google_map.info_window.auto_open' => true,
            'ivory_google_map.info_window.open_event' => 'click',
            'ivory_google_map.info_window.auto_close' => false,
            'ivory_google_map.info_window.options' => array(
            ),
            'ivory_google_map.polyline.prefix_javascript_variable' => 'polyline_',
            'ivory_google_map.polyline.options' => array(
            ),
            'ivory_google_map.encoded_polyline.prefix_javascript_variable' => 'encoded_polyline_',
            'ivory_google_map.encoded_polyline.options' => array(
            ),
            'ivory_google_map.polygon.prefix_javascript_variable' => 'polygon_',
            'ivory_google_map.polygon.options' => array(
            ),
            'ivory_google_map.rectangle.prefix_javascript_variable' => 'rectangle_',
            'ivory_google_map.rectangle.bound.south_west.latitude' => -1,
            'ivory_google_map.rectangle.bound.south_west.longitude' => -1,
            'ivory_google_map.rectangle.bound.south_west.no_wrap' => true,
            'ivory_google_map.rectangle.bound.north_east.latitude' => 1,
            'ivory_google_map.rectangle.bound.north_east.longitude' => 1,
            'ivory_google_map.rectangle.bound.north_east.no_wrap' => true,
            'ivory_google_map.rectangle.options' => array(
            ),
            'ivory_google_map.circle.prefix_javascript_variable' => 'circle_',
            'ivory_google_map.circle.center.longitude' => 0,
            'ivory_google_map.circle.center.latitude' => 0,
            'ivory_google_map.circle.center.no_wrap' => true,
            'ivory_google_map.circle.radius' => 1,
            'ivory_google_map.circle.options' => array(
            ),
            'ivory_google_map.ground_overlay.prefix_javascript_variable' => 'ground_overlay_',
            'ivory_google_map.ground_overlay.url' => '',
            'ivory_google_map.ground_overlay.bound.south_west.latitude' => -1,
            'ivory_google_map.ground_overlay.bound.south_west.longitude' => -1,
            'ivory_google_map.ground_overlay.bound.south_west.no_wrap' => true,
            'ivory_google_map.ground_overlay.bound.north_east.latitude' => 1,
            'ivory_google_map.ground_overlay.bound.north_east.longitude' => 1,
            'ivory_google_map.ground_overlay.bound.north_east.no_wrap' => true,
            'ivory_google_map.ground_overlay.options' => array(
            ),
            'ivory_google_map.kml_layer.prefix_javascript_variable' => 'kml_layer_',
            'ivory_google_map.kml_layer.url' => '',
            'ivory_google_map.kml_layer.options' => array(
            ),
            'ivory_google_map.event.prefix_javascript_variable' => 'event_',
            'ivory_google_map.geocoder_request.address' => NULL,
            'ivory_google_map.geocoder_request.coordinate.latitude' => NULL,
            'ivory_google_map.geocoder_request.coordinate.longitude' => NULL,
            'ivory_google_map.geocoder_request.coordinate.no_wrap' => NULL,
            'ivory_google_map.geocoder_request.bound.south_west.latitude' => NULL,
            'ivory_google_map.geocoder_request.bound.south_west.longitude' => NULL,
            'ivory_google_map.geocoder_request.bound.south_west.no_wrap' => NULL,
            'ivory_google_map.geocoder_request.bound.north_east.latitude' => NULL,
            'ivory_google_map.geocoder_request.bound.north_east.longitude' => NULL,
            'ivory_google_map.geocoder_request.bound.north_east.no_wrap' => NULL,
            'ivory_google_map.geocoder_request.region' => NULL,
            'ivory_google_map.geocoder_request.language' => NULL,
            'ivory_google_map.geocoder_request.sensor' => false,
            'ivory_google_map.directions.url' => 'http://maps.googleapis.com/maps/api/directions',
            'ivory_google_map.directions.https' => false,
            'ivory_google_map.directions.format' => 'json',
            'ivory_google_map.directions_request.avoid_highways' => NULL,
            'ivory_google_map.directions_request.avoid_tolls' => NULL,
            'ivory_google_map.directions_request.optimize_waypoints' => NULL,
            'ivory_google_map.directions_request.provide_route_alternatives' => NULL,
            'ivory_google_map.directions_request.region' => NULL,
            'ivory_google_map.directions_request.travel_mode' => NULL,
            'ivory_google_map.directions_request.unit_system' => NULL,
            'ivory_google_map.directions_request.sensor' => false,
            'ivory_google_map.twig.extension.class' => 'Ivory\\GoogleMapBundle\\Twig\\GoogleMapExtension',
            'google.analytics.trackers' => array(
                'default' => array(
                    'name' => 'MyJavaScriptCompatibleVariableNameWithNoSpaces',
                    'accountId' => 'UA-xxxx-x',
                    'domain' => '.mydomain.com',
                    'trackPageLoadTime' => true,
                ),
            ),
            'google.analytics.whitelist' => array(
            ),
            'google.analytics.js_source_https' => 'https://ssl',
            'google.analytics.js_source_http' => 'http://www',
            'google.analytics.js_source_endpoint' => '.google-analytics.com/ga.js',
            'doctrine.odm.mongodb.connection.class' => 'Doctrine\\MongoDB\\Connection',
            'doctrine.odm.mongodb.configuration.class' => 'Doctrine\\ODM\\MongoDB\\Configuration',
            'doctrine.odm.mongodb.document_manager.class' => 'Doctrine\\ODM\\MongoDB\\DocumentManager',
            'doctrine.odm.mongodb.logger.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Logger\\DoctrineMongoDBLogger',
            'doctrine.odm.mongodb.data_collector.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\DataCollector\\DoctrineMongoDBDataCollector',
            'doctrine.odm.mongodb.event_manager.class' => 'Doctrine\\Common\\EventManager',
            'doctrine.odm.mongodb.proxy_namespace' => 'Proxies',
            'doctrine.odm.mongodb.proxy_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/doctrine/odm/mongodb/Proxies',
            'doctrine.odm.mongodb.auto_generate_proxy_classes' => false,
            'doctrine.odm.mongodb.hydrator_namespace' => 'Hydrators',
            'doctrine.odm.mongodb.hydrator_dir' => '/var/www/sites_symfony/applications/restaurantdiclarenzo.com/app/cache/prod/doctrine/odm/mongodb/Hydrators',
            'doctrine.odm.mongodb.auto_generate_hydrator_classes' => false,
            'doctrine.odm.mongodb.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.odm.mongodb.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.odm.mongodb.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.odm.mongodb.cache.memcache_host' => 'localhost',
            'doctrine.odm.mongodb.cache.memcache_port' => 11211,
            'doctrine.odm.mongodb.cache.memcache_instance.class' => 'Memcache',
            'doctrine.odm.mongodb.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.odm.mongodb.metadata.driver_chain.class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\DriverChain',
            'doctrine.odm.mongodb.metadata.annotation.class' => 'Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.odm.mongodb.metadata.xml.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Mapping\\Driver\\XmlDriver',
            'doctrine.odm.mongodb.metadata.yml.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Mapping\\Driver\\YamlDriver',
            'doctrine.odm.mongodb.mapping_dirs' => array(
            ),
            'doctrine.odm.mongodb.xml_mapping_dirs' => array(
            ),
            'doctrine.odm.mongodb.yml_mapping_dirs' => array(
            ),
            'doctrine.odm.mongodb.document_dirs' => array(
            ),
            'doctrine.odm.mongodb.security.user.provider.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Security\\DocumentUserProvider',
            'doctrine.odm.mongodb.proxy_cache_warmer.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\CacheWarmer\\ProxyCacheWarmer',
            'doctrine.odm.mongodb.hydrator_cache_warmer.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\CacheWarmer\\HydratorCacheWarmer',
            'doctrine_odm.mongodb.validator.unique.class' => 'Symfony\\Bundle\\DoctrineMongoDBBundle\\Validator\\Constraints\\UniqueValidator',
            'doctrine.odm.mongodb.document_managers' => array(
                0 => 'default',
            ),
            'sitemap.class' => 'Avalanche\\Bundle\\SitemapBundle\\Sitemap',
            'sitemap.controller.class' => 'Avalanche\\Bundle\\SitemapBundle\\Controller\\SitemapController',
            'sitemap.url.class' => 'Avalanche\\Bundle\\SitemapBundle\\Sitemap\\Url',
            'sitemap.url.mapper.class' => 'Avalanche\\Bundle\\SitemapBundle\\Document\\MetadataMapper',
            'sitemap.mongodb.collection' => 'app_urls',
            'sitemap.mongodb.database' => 'votre_site',
            'sitemap.twig.extension.class' => 'Avalanche\\Bundle\\SitemapBundle\\Templating\\SitemapExtension',
            'sitemap.provider.chain.class' => 'Avalanche\\Bundle\\SitemapBundle\\Sitemap\\ProviderChain',
            'sitemap.base_url' => 'http://www.votresite.fr/',
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
        );
    }
}
