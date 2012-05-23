<?php

namespace Site\HomeBundle\Sitemap;

use Avalanche\Bundle\SitemapBundle\Sitemap\Provider;
use Avalanche\Bundle\SitemapBundle\Sitemap;
use Avalanche\Bundle\SitemapBundle\Sitemap\Url;
use Avalanche\Bundle\SitemapBundle\Sitemap\Url\Image;
use Symfony\Component\Routing\Router;


class ReferenceSitemapProvider implements Provider {

    protected $topicRepository;
    protected $router;
	private $urls = array(
		"SittlerHomeBundle_homepage",
		"SittleHomeBundle_service",
		"SittleHomeBundle_contact",
		"SittlerHomeBundle_mercerie"
	);

    public function __construct(Router $router, $container)
    {
        $this->router = $router;
		$this->container = $container;
    }

	public function getParamCatalogueManager()
	{
		return $this->container->getParameter("catalogue_manager");
	}

	public function getCatalogueManager()
	{
		return $this->container->get($this->getParamCatalogueManager());
	}
	
    public function populate(\Avalanche\Bundle\SitemapBundle\Sitemap $sitemap)
    {
    	$article_manager = $this->getCatalogueManager()->getProductManager();
		
		foreach($this->urls as $uneurl)
		{
				$url = new Url($this->router->generate($uneurl));
				$url -> setLastmod(new \DateTime());
				$url->setPriority('1.0');
				$sitemap->add($url);
		}

        $sitemap->save();
    }
}