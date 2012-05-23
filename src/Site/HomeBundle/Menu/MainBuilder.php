<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace Site\HomeBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Sittler\HomeBundle\MenuEvents;
use Sittler\HomeBundle\Event\ConfigureMenuEvent;

class MainBuilder extends ContainerAware
{
		
    public function build(FactoryInterface $factory)
    {
    	$em = $this->container->get("doctrine")->getEntityManager();
		$routing = $this->container->get("router");
		
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

        $menu
        	->addChild('Accueil', array('route' => 'SiteHomeBundle_homepage'));
			
		$menu
			->addChild('Spécialités Italiennes', array( 'uri' => $routing->generate("SiteHomeBundle_lacarte").'#nos-pizza'));
			
		$menu
			->addChild('Spécialités Poissons', array( 'uri' => $routing->generate("SiteHomeBundle_lacarte").'#nos-poissons'));
			
		$menu
			->addChild('Contact', array( 'route' => 'SiteHomeBundle_contact'));
		

        return $menu;
    }
	
}